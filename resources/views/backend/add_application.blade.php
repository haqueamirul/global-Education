@extends('layouts.backend_app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Application</h1>

  </div>

  <div class="row">
  	<div class="col-lg-3"></div>
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Add Application</h6>
        </div>
        <div class="card-body">
          <form method="post" action="{{route('savePost')}}" enctype="multipart/form-data">
            @csrf
            <h4 style="margin: 20px 0px;color: #000;">General Informations</h4>
            <div class="form-group">
              <label for="yourName">Your Name</label>
              <input type="text" class="form-control" id="yourName" name="name" aria-describedby="emailHelp"
                placeholder="Enter your name"> 
            </div>
            <div class="form-group">
              <label for="phoneNum">Phone Number</label>
              <input type="number" class="form-control" id="phoneNum" name="phone" aria-describedby="emailHelp"
                placeholder="Enter phone number"> 
            </div>
            <div class="form-group">
              <label for="yourEmail">Your Email</label>
              <input type="email" class="form-control" id="yourEmail" name="phone" aria-describedby="emailHelp"
                placeholder="Enter your email"> 
            </div>
            <h5 style="margin: 40px 0px 20px 0px;color: #000;">SSC / O Level</h5>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Certificate/Degree</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>==== Select ====</option>
                <option>SSC</option>
                <option>O Level</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Year</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>==== Select ====</option>
                <option>1995</option>
                <option>1996</option>
                <option>1997</option>
                <option>1998</option>
                <option>1999</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Division/Class/GPA</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>==== Select ====</option>
                <option>1st Class</option>
                <option>2nd Class</option>
                <option>3rd Class</option>
                <option>2.5-3.0</option>
                <option>3.0-3.5</option>
                <option>3.5-4.0</option>
                <option>4.0-4.5</option>
                <option>4.5-5.0</option>
              </select>
            </div>
            <h5 style="margin: 40px 0px 20px 0px;color: #000;">HSC / A Level</h5>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Certificate/Degree</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>==== Select ====</option>
                <option>HSC</option>
                <option>A Level</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Year</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>==== Select ====</option>
                <option>1995</option>
                <option>1996</option>
                <option>1997</option>
                <option>1998</option>
                <option>1999</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Division/Class/GPA</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>==== Select ====</option>
                <option>1st Class</option>
                <option>2nd Class</option>
                <option>3rd Class</option>
                <option>2.5-3.0</option>
                <option>3.0-3.5</option>
                <option>3.5-4.0</option>
                <option>4.0-4.5</option>
                <option>4.5-5.0</option>
              </select>
            </div>
            <h5 style="margin: 40px 0px 20px 0px;color: #000;">Graduation</h5>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Group/Subjects</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>==== Select ====</option>
                <option>Business Studies</option>
                <option>Accounting</option>
                <option>Bank Management.BBA</option>
                <option>MBA</option>
                <option>Commerce</option>
                <option>HRM</option>
                <option>Management</option>
                <option>Marketing</option>
                <option>Engineering Technology</option>
                <option>CSE</option>
                <option>EEE</option>
                <option>ECE</option>
                <option>Civil Engineering</option>
                <option>Mechanical Engineering</option>
                <option>Textile Engineering</option>
                <option>Naval Architecture</option>
                <option>Robotics</option>
                <option>Others</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Year</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>==== Select ====</option>
                <option>1995</option>
                <option>1996</option>
                <option>1997</option>
                <option>1998</option>
                <option>1999</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Division/Class/GPA</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>==== Select ====</option>
                <option>1st Class</option>
                <option>2nd Class</option>
                <option>3rd Class</option>
                <option>2.5-3.0</option>
                <option>3.0-3.5</option>
                <option>3.5-4.0</option>
                <option>4.0-4.5</option>
                <option>4.5-5.0</option>
              </select>
            </div>
            <h5 style="margin: 40px 0px 20px 0px;color: #000;">Masters</h5>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Group/Subjects</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>==== Select ====</option>
                <option>Business Studies</option>
                <option>Accounting</option>
                <option>Bank Management.BBA</option>
                <option>MBA</option>
                <option>Commerce</option>
                <option>HRM</option>
                <option>Management</option>
                <option>Marketing</option>
                <option>Engineering Technology</option>
                <option>CSE</option>
                <option>EEE</option>
                <option>ECE</option>
                <option>Civil Engineering</option>
                <option>Mechanical Engineering</option>
                <option>Textile Engineering</option>
                <option>Naval Architecture</option>
                <option>Robotics</option>
                <option>Others</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Year</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>==== Select ====</option>
                <option>1995</option>
                <option>1996</option>
                <option>1997</option>
                <option>1998</option>
                <option>1999</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Division/Class/GPA</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>==== Select ====</option>
                <option>1st Class</option>
                <option>2nd Class</option>
                <option>3rd Class</option>
                <option>2.5-3.0</option>
                <option>3.0-3.5</option>
                <option>3.5-4.0</option>
                <option>4.0-4.5</option>
                <option>4.5-5.0</option>
              </select>
            </div>
            <h5 style="margin: 40px 0px 20px 0px;color: #000;">Country Choose</h5>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Select a Country</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>==== Select ====</option>
                <option>UK</option>
                <option>USA</option>
                <option>Canada</option>
                <option>Ireland</option>
                <option>New Zealand</option>
                <option>Australia</option>
                <option>Garmany</option>
                <option>Estonia</option>
                <option>Others</option>
              </select>
            </div>
            <h5 style="margin: 40px 0px 20px 0px;color: #000;">University Choose</h5>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Select a University</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>==== Select university====</option>
                <option>Massachusetts Institute of Technology (MIT) </option>
                <option>University of Oxford </option>
                <option>Stanford University </option>
                <option>University of Cambridge </option>
                <option>Others</option>
              </select>
            </div>
            <h5 style="margin: 40px 0px 20px 0px;color: #000;">Preferred Degree</h5>
            <div class="form-group">
              <label for="exampleFormControlSelect3">Preferred Degree</label>
              <select class="form-control" id="exampleFormControlSelect3">
                <option>==== Select ====</option>
                <option>Postgraduate</option>
                <option>Undergraduate </option>
                <option>Professional </option>
                <option>Diploma </option>
                <option>Others</option>
              </select>
            </div>
            <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="file" id="customFile">
                <label class="custom-file-label" for="customFile">Upoload Your Passport</label>
              </div>
            </div>
            <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="file" id="customFile">
                <label class="custom-file-label" for="customFile">Upoload Your Photo</label>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
  </div>
  <div class="col-lg-3"></div>
</div>

@endsection
