@extends('layouts.user.main-profile')

@section('title')
    Categories Create
@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <h1 class="text-center">Welcome</h1>
            <p class="text-center">Let's Create a Moti Account. your First step to join the moti Community</p>
            <div class="card-body">
                <h4 class="card-title">Basic Information</h4>
                <form class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="{{ Auth::user()->name }}"
                            placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" value=""
                            placeholder="Enter Last Name" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">DOB</label>
                        <input type="date" class="form-control" id="exampleInputName1" value=""
                            placeholder="Enter Dob" />
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
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
                                        <input type="radio" class="form-check-input" name="about_moti" id="optionsRadios1"
                                            value="My Employer"> My Employer <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="about_moti" id="optionsRadios1"
                                            value="Social Media"> Social Media <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="about_moti" id="optionsRadios1"
                                            value="Article or Blog"> Article or Blog <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="about_moti" id="optionsRadios1"
                                            value="Friend or Family"> Friend or Family <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="about_moti" id="optionsRadios1"
                                            value="Health Professional"> Health Professional <i
                                            class="input-helper"></i></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="about_moti" id="optionsRadios1"
                                            value="Podcast Ad"> Podcast Ad <i class="input-helper"></i></label>
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
                    <div class="form-group">
                        <label for="exampleSelectGender">What are your interests?</label>
                        <select class="form-control" id="exampleSelectGender">
                            <option disabled selected value="">Select interests</option>
                            @if (isset($categories) && !empty($categories))
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <br>
                    <div class="form-group" data-select2-id="7">
                        <label>What is your experience?</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check radio2">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input " name="about_moti"
                                            id="optionsRadios1" value="Nothing - I’m new to this!">Nothing - I’m new to
                                        this! <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="about_moti"
                                            id="optionsRadios1" value="Some Stuff"> Some Stuff <i
                                            class="input-helper"></i></label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="about_moti"
                                            id="optionsRadios1" value="Lots!"> Lots! <i
                                            class="input-helper"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <label for="exampleInputCity1">Notifications</label>

                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="Push notification"> Push
                                    notification <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="Tips"> Tips <i
                                        class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="Reminders"> Reminders <i
                                        class="input-helper"></i></label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <label for="">We understand every body’s schedules are
                            different.</label>
                        <br>
                        Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck">
                        <div id="ifYes" style="visibility:hidden">
                            Time<input type='time' min="4" max="10" id='yes' name='yes'><br>
                        </div>
                        <br>
                        No
                        <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck">
                        <div id="no" style="visibility:hidden">
                            Time<input type='time' min="04" id='yes' name='yes'><br>
                        </div>
                        <br>
                        <br>
                        More
                        <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="moreCheck">
                        <div id="more" style="visibility:hidden">
                            Time<input type='time' min="04" id='yes' name='yes'><br>
                        </div>
                        <br>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                </form>
            </div>
        </div>
    </div> @push('scripts')
        <script>
            function yesnoCheck() {
                if (document.getElementById('yesCheck').checked) {
                    document.getElementById('ifYes').style.visibility = 'visible';
                    document.getElementById('no').style.visibility = 'hidden';
                    document.getElementById('more').style.visibility = 'hidden';

                } else if (document.getElementById('noCheck').checked) {
                    document.getElementById('ifYes').style.visibility = 'hidden';
                    document.getElementById('no').style.visibility = 'visible';
                    document.getElementById('more').style.visibility = 'hidden';


                } else if (document.getElementById('moreCheck').checked) {

                    document.getElementById('ifYes').style.visibility = 'hidden';
                    document.getElementById('no').style.visibility = 'hidden';
                    document.getElementById('more').style.visibility = 'visible';

                }
            }
        </script>
    @endpush
@endsection
