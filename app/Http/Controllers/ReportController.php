<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Session;

class ReportController extends Controller
{
    private $baseUrl;
    private $username;
    private $password;

    public function __construct()
    {
        $this->baseUrl = env('API_URL');
        $this->username = env('API_USERNAME');
        $this->password = env('API_PASSWORD');
    }


    //return the report page
    public function report(Request $request){

        if( $request->has("from_date")){
            $message = $this->index($request);

            return view('/reports/reportview', ['messages' =>  $message]);
        }

        return view('/reports/reportview', ['messages' => []]);
    }


    //     public function search(Request $request)
    // {
    //     // Assuming you have a Search model or query builder
    //     $searchResults = Search::whereBetween('created_at', [$request->input('start_date'), $request->input('end_date')])->get();

    //     // Paginate the results
    //     $paginatedResults = $searchResults->paginate(1000);

    //     return view('search_results', [
    //         'total_records' => $paginatedResults->total(),
    //         'total_pages' => $paginatedResults->lastPage(),
    //         'current_page' => $paginatedResults->currentPage(),
    //         'end_date' => $request->input('end_date'),
    //         'start_date' => $request->input('start_date'),
    //         'results' => $paginatedResults,
    //     ]);
    // }


    public function index(Request $request)
        {
            // Log the initial request and all received parameters
            Log::info("API Request Received", ['parameters' => $request->all()]);
            // dd($request->all());
            $request->validate([
                'status'=>['nullable'],
                'from_date'=>['required','date'],
                'to_date'=>['required','date']
            ]);

            if($request->ajax()){
                $prev = $request->prev;
                $next = $request->next;
            }

            // try {
                // Fetch and log start and end dates
                $startDate = Carbon::parse($request->from_date)->startOfDay()->format('Y-m-d H:i:s');
                $endDate = Carbon::parse($request->to_date)->endOfDay()->format('Y-m-d H:i:s');
                // Log::info("Resolved Dates", ['start_date' => $startDate, 'end_date' => $endDate]);
                
                // $paginator = Session::get('paginator')??null;
                // $initialPaginator = [
                //     'prev'=>$prev??null,
                //     'next'=>$next??1
                // ];
                // if(!isset($paginator)){
                //     Session::put('paginator',$initialPaginator);
                //     $paginator = Session::get('paginator');
                // }
                // Session::forget('paginator');
                
                $batchResponse = Http::withBasicAuth($this->username, $this->password)->withHeaders([
                    'Accept'=>'application/json'
                ])
                    ->get(env('API_URL')."/fetch-page", [
                        'start_date' => '2024-10-01 10:00:00',
                        'end_date' => '2024-10-02 10:00:00',
                        'page' => 1
                    ]);



                Log::info("fetch-batch Response", ['status' => $batchResponse->status(), 'body' => $batchResponse->body()]);

                if (!$batchResponse->successful()) {
                    throw new \Exception('Failed to fetch batch: ' . $batchResponse->body());
                }

                // Session::put('paginator',[
                //     'prev'=>$paginator['next'],
                //     'next'=>$paginator['next']+1
                // ]);

                $paginator = Session::get('paginator');

                // Session::forget('paginator');
                // dd($batchResponse->json(),$paginator);

                $messages = $batchResponse->json()['data']['records'];
                Log::info("Messages Retrieved", ['count' => count($messages)]);

                // 3. Transform messages and log each message transformation
                // $transformedMessages = collect($messages)->map(function ($message) {
                //     $transformed = [
                //         'sender_id' => $message['message_id'],
                //         'date_sent' => Carbon::parse($message['submit_time'])->format('Y-m-d H:i:s'),
                //         'status' => $this->transformStatus($message['delivery_status']),
                //         'delivered_at'=>Carbon::parse($message['delivery_time'])->format('Y-m-d H:i:s'),
                //         'message_content' => $message['message']
                //     ];
                //     Log::info("Message Transformed", $transformed);
                //     return $transformed;
                // });

                // Log::info("All Messages Transformed", ['transformedMessages' => $transformedMessages->toArray()]);

                // 4. Clear search session
                // Log::info("Clearing search session with page");
                // $clearResponse = Http::withBasicAuth($this->username, $this->password)
                //     ->post(env('API_URL')."/clear-search", [
                //         // 'page' => $page;
                //     ]);
                // Log::info("clear-search Response", ['status' => $clearResponse->status(), 'body' => $clearResponse->body()]);

                // dd([
                //     'messages' => $messages,
                //     'startDate' => $startDate,
                //     'endDate' => $endDate
                // ]);


                // foreach($messages as $msg){
                //     dd($msg['submit_uuid']);
                // }

                // return redirect()->route('report.view',[
                //    'messages' => $messages,
                //     'startDate' => $startDate,
                //     'endDate' => $endDate
                // ]);

                return $messages;
                // return view('reports.reportview',[
                //     'messages' => $messages,
                //     'startDate' => $startDate,
                //     'endDate' => $endDate
                // ]);

            // } catch (\Exception $e) {
            //     // Log the error with exception details
            //     Log::error("Error in ReportController@index", ['message' => $e->getMessage()]);
            //     return response()->json(['error' => 'Failed to fetch SMS data: ' . $e->getMessage()], 500);
            // }
        }
        public function generatedReport()
        {
            // Logic to generate the report
            return view('generatedreport'); // Assuming there's a Blade view named 'generatedreport'.
        }

        private function transformStatus($status)
        {
            $statusMap = [
                'DELIVERED' => 'success',
                'PENDING' => 'warning',
                'FAILED' => 'danger',
            ];
            return $statusMap[$status] ?? 'unknown';
        }
    
}

