@extends('layouts.app')
@section('style')
<style>
    #btn1{
        position: relative;
        top:4em;
    }
    #p{
        font-size: 3em;
        margin-top:1em; 
        color: red;
        
    }
    #p:hover{
        opacity: 0.6;
    }
    body{
      background-color: #f8f9fa;
    }
    </style>
  @endsection
   
     @section('content')
       <center><marquee scrollamount="15"><p class="lead" id="p">Note:Your complain are strcitly monitored please donot wrtie unecessary complain</p></center></marquee>
         <hr>
    
           <center><button type="button" class=" btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#exampleModal" id="btn1">
            Register a Complain
           </button>
        </center>
    


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Complain</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" method="POST"  id="form">
          @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control text-capitalize" name="name" id="" value="{{Auth::user()->name}}" readonly> 
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id=""> 
            </div>
            <div class="form-group">
               <label for="category">Category</label>
                <select id="category" class="form-control" name="category">
                  <option selected >-------------------------- कोटि छनोट गर्नुहोस् -----------------------------</option>
                  <option value="लागु पदार्थको दुरुपयोग">लागु पदार्थको दुरुपयोग (Drug Abuse)</option>
                  <option value="प्राकृतिक श्रोत दोहन">प्राकृतिक श्रोत दोहन (Natural Resource Misuse)</option>
                  <option value="भन्सार/राजस्व छली">भन्सार/राजस्व छली (Complaint of Customs Revenue Fraud)</option>
                  <option value="खानेपानी सम्बन्धित गुनासो">खानेपानी सम्बन्धित गुनासो (Drinking Water Related Complains)</option>
                  <option value="प्राकृतिक श्रोतको अतिक्रमण">प्राकृतिक श्रोतको अतिक्रमण (Natural Resources Encroachment)</option>
                  <option value="फुटपाथ/ जेब्राक्रस नभएको">फुटपाथ/ जेब्राक्रस नभएको (No Footpath/Zebra cross)</option>
                  <option value="लागु औषध ओसारपोसार">लागु औषध ओसारपोसार (Drugs Trafficking)</option>
                  <option value="स्वास्थ्य चौकी/अस्पतालसंग सम्बन्धी">स्वास्थ्य चौकी/अस्पतालसंग सम्बन्धी (Related to health post / hospital)</option>
                  <option value="महामारी फैलिएको">महामारी फैलिएको (Spread of Epidemics)</option>
                  <option value="प्रयोगशालामा आवश्यक उपकरणको अभाव">प्रयोगशालामा आवश्यक उपकरणको अभाव (Lack of essential equipment in the laboratory)</option>
                  <option value="कार्यालय परिसरमा सफाईको कमी">कार्यालय परिसरमा सफाईको कमी (Lack of cleanliness in office premises)</option>
                  <option value="कर्मचारीहरूले कार्यालय पोसाक नलगाएको">कर्मचारीहरूले कार्यालय पोसाक नलगाएको (Not putting office uniform by staffs)</option>
                  <option value="सरकारी सवारी साधनको दुरुपयोग">सरकारी सवारी साधनको दुरुपयोग (Misuse of government Vehicles)</option>
                  <option value="सार्वजनिक निर्माणमा सम्बन्धी">सार्वजनिक निर्माणमा सम्बन्धी (Delay in public construction)</option>
                  <option value="निर्माणकार्यमा अनियमितता">निर्माणकार्यमा अनियमितता (Irregularity in construction)</option>
                  <option value="घुस/रिसवत लेनदेन">घुस/रिसवत लेनदेन (Bribery)</option>
                  <option value="अस्पताल/स्वास्थ्य चौकीमा अनियमितता">अस्पताल/स्वास्थ्य चौकीमा अनियमितता (Irregularity in hospital/Health post)</option>
                  <option value="खरिदमा अनियमितता">खरिदमा अनियमितता (Irregularity in purchases)</option>
                  <option value="वेबसाइटमा समस्या">वेबसाइटमा समस्या (Problem in Website)</option>
                  <option value="कर्मचारी अभाव">कर्मचारी अभाव (Lack of Staff)</option>
                  <option value="पर्किङ्ग सम्बन्धि गुनासो">पर्किङ्ग सम्बन्धि गुनासो (Parking related complaint)</option>
                  <option value="कार्यालय अभिलेख/रेकर्ड सम्बन्धि गुनासो">कार्यालय अभिलेख/रेकर्ड सम्बन्धि गुनासो (Office record keeping related complains)</option>
                  <option value="कर्मचारी माथिको भेदभाव">कर्मचारी माथिको भेदभाव (Employee discrimination)</option>
                  <option value="नागरिक वडापत्र सम्बन्धि गुनासो">नागरिक वडापत्र सम्बन्धि गुनास
                </select>
            </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Problem Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="problem"></textarea>
           </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Choose Image</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="btn" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
  <script>
$(document).ready(function(){
    $("#btn").click(function(e){
        e.preventDefault(); 
        $.ajax({
            url: "{{ route('user.storecomplain') }}",
            type: "POST",
            data: new FormData($('#form')[0]),
            contentType:false,
            processData:false,
            success: function(response) {
                swal({
                  title:"Registered Sucessfully",
                  icon:"success",
                  button:true,
                })
                $("#form")[0].reset();
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }  
        });
    });
});
  </script>
@endsection
