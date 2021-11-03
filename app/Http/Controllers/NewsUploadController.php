<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('news.upload', ['ordersUploadList' => $this->getDataFromJsonFileAsArray('/app/ordersUploadList.json')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): void
    {
        $pathFile = '/app/ordersUploadList.json';

        $orderUpload = $this->getDataFromJsonFileAsArray($pathFile);

        $request->validate([
            'customername'  => ['required', 'string'],
            'customerphone' => ['required', 'string'],
            'customeremail' => ['required', 'string'],
            'dataorder'     => ['required', 'string']
        ]);

        $customername = $request->only('customername')['customername'];
        $customerphone = $request->only('customerphone')['customerphone'];
        $customeremail = $request->only('customeremail')['customeremail'];
        $dataorder = $request->only('dataorder')['dataorder'];

        $orderUpload[$customername] = ['customerphone'=>$customerphone, 'customeremail'=>$customeremail, 'dataorder'=>$dataorder];
        file_put_contents(storage_path($pathFile), json_encode($orderUpload));
//        dd($orderUpload);


        header("Location: /news/upload");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
