<html>
 

                        <div style="display:flex; justify-content:center;">

	
                            <div id="app" style="background-image: url('https://i.pinimg.com/236x/1b/15/f2/1b15f24986d32136d9c2e414696709e1.jpg'); width:300px; height: 38    0px; background-repeat: no-repeat; background-position: center center; background-size: cover">
                                <div class="header" style="text-align:center; margin-top:2.5rem">
                                        <h2>Good day PLC!</h2>
                                        <h4> We have a new applicant!</h4>
                                        <h5>Applying for the position of {{$data["user_position"]}}</h5>
                                        </div>
                                        <div class="div" style="width:70%; margin:auto; margin-top:2.5rem">
                                        <h5>Applicant Details </h5>
                                        <div class="content" >
                                        
                                        
                                            <p style="font-size:13px; "> <span style="font-weight:600">Name:</span> {{$data["user_firstname"]}}  &nbsp; {{$data["user_surname"]}}</p>
                                            <p style="font-size:13px; "> <span style="font-weight:600">Email:</span>  {{$data["user_email"]}}</p>
                                            <p style="font-size:13px; "> <span style="font-weight:600">Number:</span>{{$data["user_number"]}}</p>
                                            
                                        </div>
                                        
                                            
                                        <h5>see the resume attached below </h5>
                                    </div>
                            </div>
                        </div>
</html>