<html>
    <style>
        .container{
            background-color: lightblue;
            margin-top: 8%;
            margin-left:30%;
            margin-right:30%;
            padding: 20px;
        }
        .row .form-control{
            padding: 10px;
            margin-bottom: 8px;
            width: 150px;
        }
        .row .form-control1{
            padding: 10px;
            margin-bottom: 8px;
            margin-left:18.5%;
            width: 150px;
        }
        .row .form-control2{
            padding: 10px;
            margin-bottom: 8px;
            margin-left:25%;
            width: 150px;
        }
        .row .form-label{
            margin-right:10%;
        }
        .row .submit-btn{
            background-color: rgb(59, 59, 172);
            border-style:none;
            font-size: 14px;
            height: 30px;
            width: 120px;
            border-top-right-radius: 8px;
        }
        .row .submit-btn:hover{
            background-color: rgb(44, 44, 147);
            border-style:none;
        }
    </style>
<body>

            <form action="" method="post">
            @csrf
            @method('PUT')
                            <div class="container">
                                <h1 style="text-align: center;">Update booking page</h1>
                                <div class="row" style="margin-left:40%; margin-right:40%;">

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group">

                                                <span class="form-label">Journey Date</span>

                                                <input class="form-control" type="date" id="date" name="date" value="{{$booking->journey}}">
                            <span class="text-danger">
                            @error('date')
                            {{$message}}
                            @enderror
                            </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <span class="form-label" >From</span>
                                                        <select  class="form-control1"  type="text" id="from" name="from" value="{{$booking->fron}}">
                                                            <option value='fjgdh'>--select--</option>
                                                            <option value="Janakpur"{{ $booking->fron == "Janakpur" ? 'selected' : ''}}>Janakpur</option>
                                                            <option value="Mahendranagar"{{ $booking->fron == "Mahendranagar" ? 'selected' : ''}}>Mahendranagar</option>
                                                            <option value="Dhalkewar"{{ $booking->fron == "Dhalkewar" ? 'selected' : ''}}>Dhalkewar</option>
                                                            <option value="Bardibas"{{ $booking->fron == "Bardibas" ? 'selected' : ''}}>Bardibas</option>
                                                        </select>
                                <span class="text-danger">
                            @error('from')
                            {{$message}}
                            @enderror
                            </span>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <span class="form-label">To</span>
                                                        <select  class="form-control2" value="{{$booking->to}}" type="text"  id="to" name="to" value="{{$booking->to}}" >
                                                            <option value=''>--select--</option>
                                                            <option value="Sindhuli" {{ $booking->to == "Sindhuli" ? 'selected' : ''}}>Sindhuli</option>
                                                            <option value="Khurkot" {{ $booking->to == "Khurkot" ? 'selected' : ''}} >Khurkot</option>
                                                            <option value="Dhudikhel" {{ $booking->to == "Dhudhikhel" ? 'selected' : ''}}>Dhudikhel</option>
                                                            <option value="Kathmandu" {{ $booking->to == "Kathmandu" ? 'selected' : ''}}>Kathmandu</option>
                                                        </select>
                                <span class="text-danger">
                            @error('to')
                            {{$message}}
                            @enderror
                            </span>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-btn">
                                    <button class="submit-btn" type="submit" id="submit" value="submit" name="submit" required>Update</button>
                                     </div>
            </form></div></div></div></div>
            </section>
            </div></div>

          </div>
            </body>

        </html>
                            </div>

