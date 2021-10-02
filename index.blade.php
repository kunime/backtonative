@extends('layouts.app')
@section('title', 'Tes Tulis')
@section('content')
    <div class="container" style="margin-bottom: 3%;">
        <form method="POST" action="{{route('kirimtes')}}" enctype="multipart/form-data" id="formEdit" >
            @csrf
            <input hidden type="text" name="id_user" id="id_user" class="form-control"
                   autocomplete="off" value="{{$userId}}">
            <div class="col-md-12 col-sm-6">
                <div class="form-group">
                    <label for="motivasi">{{ $soal[0]->{'soal'} }}</label>
                    <textarea type="text" name="jawaban1"
                              class="form-control" autocomplete="off" ></textarea>
                  
                </div>
                <div class="form-group">
                    <label for="motivasi">{{ $soal[1]->{'soal'} }}</label>
                    <textarea type="text" name="jawaban2"
                              class="form-control" autocomplete="off" > </textarea>
                 
                </div>
                <div class="form-group">
                    <label for="motivasi">{{ $soal[2]->{'soal'} }}</label>
                    <textarea type="text" name="jawaban3"
                              class="form-control" autocomplete="off" > </textarea>
                    
                </div>
                <div class="form-group">
                    <label for="motivasi">{{ $soal[3]->{'soal'} }}</label>
                    <textarea type="text" name="jawaban4"
                              class="form-control" autocomplete="off" > </textarea>
                  
                </div>
                <div class="form-group">
                    <label for="motivasi">{{ $soal[4]->{'soal'} }}</label>
                    <textarea type="text" name="jawaban5"
                              class="form-control" autocomplete="off" ></textarea>
                </div>
                <div class="form-group">
                    <label for="motivasi">{{ $soal[5]->{'soal'} }}</label>
                    <textarea type="text" name="jawaban6"
                              class="form-control" autocomplete="off" > </textarea>
                </div>
                <div class="form-group">
                    <label for="motivasi">{{ $soal[6]->{'soal'} }}</label>
                    <textarea type="text" name="jawaban7"
                              class="form-control" autocomplete="off" > </textarea>
                </div>
                <div class="form-group">
                    <label for="motivasi">{{ $soal[7]->{'soal'} }}</label>
                    <textarea type="text" name="jawaban8"
                              class="form-control" autocomplete="off" > </textarea>
                </div>
                <div class="form-group">
                    <label for="motivasi">{{ $soal[8]->{'soal'} }}</label>
                    <textarea type="text" name="jawaban9"
                              class="form-control" autocomplete="off" ></textarea>
                </div>
                <div class="form-group">
                    <label for="motivasi">{{ $soal[9]->{'soal'} }}</label>
                    <textarea type="text" name="jawaban10"
                              class="form-control" autocomplete="off" >  </textarea>
                </div>
                <hr>
                <button class="btn btn-primary" type="submit"
                        name="submitbutton" style="float:right; margin-bottom: 3%;">Kirim &nbsp;<i class="fa fa-check" aria-hidden="true"></i>
                </button>
            </div>
        </form>
    </div>
@endsection
