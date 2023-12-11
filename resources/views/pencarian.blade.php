@extends('master5')

@section('konten')
<form action="{{ route('search') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">

    <div class="col-md-5">

                <strong>TYPE</strong>

                <select name="type" class="form-control">
                <option value="-" selected>-</option>
                <option value="j">j</option>
                <option value="w">w</option>
                </select>

            </div>

            <div class="col-md-5">
                <strong>wc</strong>
                <select name="wc" class="form-control">
                <option value="N0" selected>0</option>
                <option value="N1">1</option>
                <option value="N2">2</option>
                <option value="N3">3</option>

                </select>

            </div>
             <div class="col-md-5">

                <strong>FC</strong>
                <select name="fc" class="form-control">
                <option value="0" selected>0</option>
                <option value="f01">f01</option>
                <option value="f02">f02</option>
                <option value="f03">f03</option>

                </select>

            </div>

            <div class="col-md-5">

                <strong>YC</strong>
                <select name="yc" class="form-control">
                <option value="0" selected>0</option>
                <option value="yc1">yc1</option>
                <option value="yc2">yc2</option>

                </select>

            </div>

            <div class="col-md-5">

                <strong>SC</strong>
                <select name="sc" class="form-control">
                <option value="Z01" selected>Z01</option>
                <option value="Z02" selected>Z02</option>
                <option value="Z03" selected>Z03</option>


                </select>

            </div>
      <div class="col-md-2">

            <br/>

            <button type="submit" class="btn btn-success">Search</button>

        </div>

    </div>


</form>
@endsection
