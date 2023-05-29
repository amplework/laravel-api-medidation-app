@extends('layouts.user.main-profile')

@section('title')
    Categories Create
@endsection
@push('css')
    <style>
        .radio-buttons {
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        .custom-radio input {
            display: none;
        }

        .radio-btn {
            margin: 10px;
            width: 150px;
            height: 150px;
            border: 3px solid transparent;
            display: inline-block;
            border-radius: 10px;
            position: relative;
            text-align: center;
            box-shadow: 0 0 20px #ed0ade67;
            cursor: pointer;
        }

        .radio-btn>i {
            color: #ffffff;
            background-color: #ffdae9;
            font-size: 20px;
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%) scale(2);
            border-radius: 50px;
            padding: 3px;
            transition: 0.5s;
            pointer-events: none;
            opacity: 0;
        }

        .radio-btn .hobbies-icon {
            width: 50px;
            height: 50px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .radio-btn .hobbies-icon img {
            display: block;
            width: 100%;
            margin-bottom: 20px;
        }

        .radio-btn .hobbies-icon i {
            color: #ffdae9;
            line-height: 80px;
            font-size: 60px;
        }

        .radio-btn .hobbies-icon h3 {
            color: #1d0202;
            font-size: 18px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .custom-radio input:checked+.radio-btn {
            border: 5px solid #df0ec3;
        }

        .custom-radio input:checked+.radio-btn>i {
            opacity: 2;
            transform: translateX(-95%) scale(1);
        }
    </style>
@endpush
@section('content')
    <div class="container mt-5">
        <div class="col-12 grid-margin ">
            <div class="card">
                <h1 class="text-center">Welcome </h1>
                <p class="text-center">Let's Create a Moti Account. your First step to join the moti Community</p>
                <div class="card-body">
                    <h4 class="card-title">Basic Information</h4>
                    <form class="forms-sample" action="{{ route('profile.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName1"
                                value="{{ Auth::user()->name }}" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="exampleInputName1"
                                value="" placeholder="Enter Last Name" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">DOB</label>
                            <input type="date" name="dob" class="form-control" id="exampleInputName1" value=""
                                placeholder="Enter Dob" />
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" name="gender" id="exampleSelectGender">
                                <option disabled selected value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group" data-select2-id="7">
                            <label>How did you hear about moti?</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check radio2">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input " name="about_moti"
                                                id="optionsRadios1" value="Apps Store of Google"> Apps Store of Google <i
                                                class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="about_moti"
                                                id="optionsRadios1" value="My Employer"> My Employer <i
                                                class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="about_moti"
                                                id="optionsRadios1" value="Social Media"> Social Media <i
                                                class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="about_moti"
                                                id="optionsRadios1" value="Article or Blog"> Article or Blog <i
                                                class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="about_moti"
                                                id="optionsRadios1" value="Friend or Family"> Friend or Family <i
                                                class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="about_moti"
                                                id="optionsRadios1" value="Health Professional"> Health Professional <i
                                                class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="about_moti"
                                                id="optionsRadios1" value="Podcast Ad"> Podcast Ad <i
                                                class="input-helper"></i></label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="about_moti"
                                                id="optionsRadios1" value="Other"> Other <i
                                                class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        {{-- <div class="form-group">
                            <label for="exampleSelectGender">What are your interests?</label>
                            <p>Let us know your area of interest and we will get you the best of Moti!</p>
                            <select class="form-control" name="categories" id="exampleSelectGender">
                                <option disabled selected value="">Select interests</option>
                                @if (isset($categories) && !empty($categories))
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div> --}}
                        <hr>
                        {{-- <div class="main-container"> --}}
                        <h6>What are your interests?</h6>
                        <p>Let us know your area of interest and we will get you the best of Moti!</p>


                        <div class="radio-buttons">
                            @if (isset($categories) && !empty($categories))
                                @foreach ($categories as $cat)
                                    <label class="custom-radio">
                                        <input type="checkbox" name="categories[]" value="{{ $cat->id }}">
                                        <span class="radio-btn"><i class="mdi mdi-check-circle"></i>
                                            <div class="hobbies-icon">
                                                <img
                                                    src="https://img.freepik.com/free-vector/sport-equipment-concept_1284-13034.jpg?size=626&ext=jpg">
                                           <strong>{{substr($cat->name,0,5)}}</strong> 
                                            </div>
                                        </span>
                                    </label>
                                @endforeach
                            @endif
                        </div>

                        <hr>
                        <br>
                        <div class="form-group" data-select2-id="7">
                            <label>What is your experience?</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check radio2">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input " name="experience"
                                                id="optionsRadios1" value="Nothing - I’m new to this!">Nothing - I’m new
                                            to
                                            this! <i class="input-helper"></i></label>
                                        <p>For those just getting started.</p>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="experience"
                                                id="optionsRadios1" value="Some Stuff"> Some Stuff <i
                                                class="input-helper"></i></label>
                                        <p>For those who have some experience.</p>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="experience"
                                                id="optionsRadios1" value="Lots!"> Lots! <i
                                                class="input-helper"></i></label>
                                        <p>For those who are already
                                            familiar with health & wellness.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>

                        <div class="col-md-6">
                            <label for="exampleInputCity1">Notifications</label>
                            <p>Allow us to notify you with tips, quotes and much more.</p>

                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="push_notification" value="1"> Push
                                        notification <i class="input-helper"></i></label>
                                    <p>We will send you notifications when connections update content etc.</p>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="tips" value="1"> Tips <i
                                            class="input-helper"></i></label>
                                    <p>We will send you tips to help you on your health & wellness journey.</p>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="reminders" value="1"> Reminders <i
                                            class="input-helper"></i></label>
                                    <p>Receive quotes based on your preference to keep you
                                        going through out your day.</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div>
                            <label for="">We understand every body’s schedules are
                                different.</label>
                            <p>So we would like to give you the option to schedule a reminder to practice at a time that is
                                convenient for you.</p>
                            <br>
                            <input type="radio" onclick="javascript:yesnoCheck();" name="notification_schedule"
                                id="yesCheck" value="morning">
                            <label for="yesCheck">Morning</label>
                         
                            <br>

                            <input type="radio" onclick="javascript:yesnoCheck();" name="notification_schedule"
                                id="noCheck" value="afternoon">
                            <label for="noCheck">Afternoon</label>
                            
                            <br>
                            <br>
                            <input type="radio" onclick="javascript:yesnoCheck();" name="notification_schedule"
                                id="moreCheck" value="afternoon">
                            <label for="moreCheck">Evening</label>
                            <hr>
                            <div id="no" style="visibility:visible">
                                Time<input type='time' id='yes' name='time'><br>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="form-group" data-select2-id="7">
                            <label>Manage your profile visibility</label>
                            <p>Were an open community but your
                                privacy matters.</p>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check radio2">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input " name="profile_status"
                                                id="optionsRadios1" value="1">Public Profile<i
                                                class="input-helper"></i></label>
                                        <p>If enabled, anyone can see activities, content and connections</p>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="profile_status"
                                                id="optionsRadios1" value="0">Private Profile <i
                                                class="input-helper"></i></label>
                                        <p>For those who have some experience.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        {{-- <script>
            let not=0;
            function yesnoCheck() {
                if (document.getElementById('yesCheck').checked) {
                    document.getElementById('ifYes').style.visibility = 'visible';
                    document.getElementById('no').style.visibility = 'hidden';
                    document.getElementById('more').style.visibility = 'hidden';
                    document.getElementById('notification_schedule_a').val(not);
                    document.getElementById('notification_schedule_e').val(not);


                } else if (document.getElementById('noCheck').checked) {
                    document.getElementById('ifYes').style.visibility = 'hidden';
                    document.getElementById('no').style.visibility = 'visible';
                    document.getElementById('more').style.visibility = 'hidden';
                    document.getElementById('notification_schedule_m').val(not);
                    document.getElementById('notification_schedule_e').val(not);


                } else if (document.getElementById('moreCheck').checked) {

                    document.getElementById('ifYes').style.visibility = 'hidden';
                    document.getElementById('no').style.visibility = 'hidden';
                    document.getElementById('more').style.visibility = 'visible';
                    document.getElementById('notification_schedule_a').val(not);
                    document.getElementById('notification_schedule_m').val(not);

                }
            }
        </script> --}}
    @endpush
@endsection
