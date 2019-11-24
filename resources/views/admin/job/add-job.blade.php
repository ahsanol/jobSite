@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('new-job') }}" method="POST">
                @csrf
            <div class="card card-body">
                <h4>{{ Session::get('msg') }}</h4>
                <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" name="job_title" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Job Description</label>
                    <textarea class="form-control" name="job_description"></textarea>
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input type="text" name="salary" class="form-control"/>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Location</label>
                            <select name="location" class="form-control">
                                <option value="">---Select Location---</option>
                                <option value="Mohakhali">Mohakhali</option>
                                <option value="Gulshan">Gulshan</option>
                                <option value="Uttara">Uttara</option>
                                <option value="Dhanmondi">Dhanmondi</option>
                                <option value="Mirpur">Mirpur</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Country</label>
                            <select name="country" class="form-control">
                                <option value="">---Select Country---</option>
                                <option value="Bangladesh">Bangladesh</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="btn" class="btn btn-success btn-block"/>
                </div>
            </div>
           </form>
        </div>
     </div>

@endsection

