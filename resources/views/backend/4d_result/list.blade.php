<div class="card-body">
    
        
            <div id="example1_wrapper" class="dataTable_wrapper dt boostrap4">
            <div class="form-group">
            <div class="row justify-content-between">
    @foreach($results as $result)
    <div class="row col-4">
    <div class="card">
    <div class="card-body" style="background-color:{{ $site->color }} ">
    <form action="{{ route('result.store') }}" >
           
           
            
            <div class="row">
                <div class="col-12" style="text-align:center">
                     <img src="../public/images/{{ ($site->siteImage) }}" height="30" width="auto" >
                </div>
            </div>
            
            <!--display type-->
            
            <div class="row">
                <div class="col-12" style="text-align:center;font-size:13px">
                     <label >{{ $result->type }}</label>
                </div>
            </div>
          
            <!-- 1st PRIZE-->
            
            <div class="row">
                <div class="col-6" style="text-align: center;font-size:13px;background-color:white;border-bottom:1px solid #28a745;">
                     <label>1ST PRIZE</label>
                </div>
                <div class="col-6" style="height: 0%;background-color:white;border-bottom:1px solid {{ $site->color }};">
                     <input name="type" class="form-control @error('n1') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:27px;border:none;" value="{{ $result->n1 }}">
                     <span class="text-danger">@error('n1') {{ $errors->first('n1') }} @enderror</span>
                </div>
                </div>
            
            

            <!-- 2nd PRIZE-->
            
            <div class="row">
                <div class="col-6" style="text-align: center;font-size:13px;background-color:white;border-bottom:1px solid {{ $site->color }};">
                     <label>2ND PRIZE</label>
                </div>
                <div class="col-6" style="text-align: center;height:0%;background-color:white;border-bottom:1px solid {{ $site->color }};">
                     <input name="n2" class="form-control @error('n2') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:30px;border:none;" value="{{ $result->n2 }}">
                     <span class="text-danger">@error('n2') {{ $errors->first('n2') }} @enderror</span>
                </div>
                
            </div>
            

            <!-- 3rd PRIZE-->
            
            <div class="row">
                <div class="col-6" style="text-align: center;font-size:13px;background-color:white;border-bottom:1px solid {{ $site->color }};">
                     <label>3RD PRIZE</label>
                </div>
                <div class="col-6" style="text-align: center;height:0%;background-color:white;border-bottom:1px solid {{ $site->color }};">
                     <input name="n3" class="form-control @error('n3') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:30px;border:none;" value="{{ $result->n3 }}">
                     <span class="text-danger">@error('n3') {{ $errors->first('n3') }} @enderror</span>
                </div>
            </div>
            

             <!-- special-->
             <div class="row ">
                <div class="col-12" style="background-color:white;border-bottom:1px solid {{ $site->color }};" >
                    
                    <div class="row">
                    <div class="col-12" style="text-align: center;font-size:13px">
                     <label>SPECIAL</label>
                    </div>
                    </div>
                   
                
                    <!--end title of special-->
                    
                        <div class="row sm-6 justify-content-between">
                        <div class="col-1" style="text-align: center;font-size:13px;">
                         <span>A</span>
                        </div>
                        <div class="col-3">
                            <input name="s1" class="form-control @error('s1') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s1 }}">
                            <span class="text-danger">@error('s1') {{ $errors->first('s1') }} @enderror</span>
                        </div>
                        <!-- s2-->
                        <div class="col-1" style="text-align: center;font-size:13px">
                            <span>B</span>
                           </div>
                           <div class="col-3">
                               <input name="s2" class="form-control @error('s2') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s2 }}">
                               <span class="text-danger">@error('s2') {{ $errors->first('s2') }} @enderror</span>
                           </div>
                        <!--s3-->
                        <div class="col-1" style="text-align: center;font-size:13px">
                            <span>C</span>
                           </div>
                           <div class="col-3">
                               <input name="s3" class="form-control @error('s3') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s3 }}">
                               <span class="text-danger">@error('s3') {{ $errors->first('s3') }} @enderror</span>
                           </div>
                   
                        </div>
                         <!--end s1-s3 special row-->
                         <!-- s4-->
                        <div class="row sm-6 justify-content-between">
                            <div class="col-1" style="text-align: center;font-size:13px">
                             <span>D</span>
                            </div>
                            <div class="col-3">
                                <input name="s4" class="form-control @error('s4') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s4 }}">
                                <span class="text-danger">@error('s4') {{ $errors->first('s4') }} @enderror</span>
                            </div>
                            <!-- s5-->
                            <div class="col-1" style="text-align: center;font-size:13px">
                                <span>E</span>
                               </div>
                               <div class="col-3">
                                   <input name="s5" class="form-control @error('s5') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s5 }}">
                                   <span class="text-danger">@error('s5') {{ $errors->first('s5') }} @enderror</span>
                               </div>
                            <!--s6-->
                            <div class="col-1" style="text-align: center;font-size:13px">
                                <span>F</span>
                               </div>
                               <div class="col-3">
                                   <input name="s6" class="form-control @error('s6') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s6 }}">
                                   <span class="text-danger">@error('s6') {{ $errors->first('s6') }} @enderror</span>
                               </div>
                        
                            </div>
                            <!--end s4-s6 special row-->
                            <!-- s7-->
                        <div class="row sm-6 justify-content-between">
                            <div class="col-1" style="text-align: center;font-size:13px">
                             <span>G</span>
                            </div>
                            <div class="col-3">
                                <input name="s7" class="form-control @error('s7') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s7 }}">
                                <span class="text-danger">@error('s7') {{ $errors->first('s7') }} @enderror</span>
                            </div>
                            <!-- s8-->
                            <div class="col-1" style="text-align: center;font-size:13px">
                                <span>H</span>
                               </div>
                               <div class="col-3">
                                   <input name="s8" class="form-control @error('s8') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s8 }}">
                                   <span class="text-danger">@error('s8') {{ $errors->first('s8') }} @enderror</span>
                               </div>
                            <!--s9-->
                            <div class="col-1" style="text-align: center;font-size:13px">
                                <span>I</span>
                               </div>
                               <div class="col-3">
                                   <input name="s9" class="form-control @error('s9') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s9 }}">
                                   <span class="text-danger">@error('s9') {{ $errors->first('s9') }} @enderror</span>
                               </div>
                        <!--end s7-s9 special row-->
                            </div>
                            <!-- s10-->
                        <div class="row sm-6 justify-content-between">
                            <div class="col-1" style="text-align: center;font-size:13px">
                             <span>J</span>
                            </div>
                            <div class="col-3">
                                <input name="s10" class="form-control @error('s10') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s10 }}">
                                <span class="text-danger">@error('s10') {{ $errors->first('s10') }} @enderror</span>
                            </div>
                            <!-- s11-->
                            <div class="col-1" style="text-align: center;font-size:13px">
                                <span>K</span>
                               </div>
                               <div class="col-3">
                                   <input name="s11" class="form-control @error('s11') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s11 }}">
                                   <span class="text-danger">@error('s11') {{ $errors->first('s11') }} @enderror</span>
                               </div>
                            <!--s12-->
                            <div class="col-1" style="text-align: center;font-size:13px">
                                <span>L</span>
                               </div>
                               <div class="col-3">
                                   <input name="s12" class="form-control @error('s12') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s12 }}">
                                   <span class="text-danger">@error('s12') {{ $errors->first('s12') }} @enderror</span>
                               </div>
                        
                            </div>  
                            <!--end s10-s12 special row-->
                            <!--s13-->
                            <div class="row " >
                                <div class="col-1 offset-sm-4" style="text-align: center;font-size:13px">
                                    <span>M</span>
                                   </div>
                                   <div class="col-3">
                                       <input name="s13" class="form-control @error('s13') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->s13 }}">
                                       <span class="text-danger">@error('s13') {{ $errors->first('s13') }} @enderror</span>
                                   </div>
                            </div> 
                    
                    <!--end title special row--> 
                </div>
                
                <!--Consolation-->
                
                <div class="col-12" style="background-color:white;border-bottom:1px solid {{ $site->color }};" >
                   
                    <div class="row">
                    <div class="col-12" style="text-align: center;font-size:13px">
                     <label>Consolation</label>
                    </div>
                    </div>
                    
                    <!--c1-->
                    
                    <div class="row sm-4 justify-content-between">
                    <div class="col-2" style="text-align: center;font-size:13px">
                        <span>N</span>
                    </div>
                    <div class="col-3">
                        <input name="c1" class="form-control @error('c1') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->c1 }}">
                        <span class="text-danger">@error('c1') {{ $errors->first('c1') }} @enderror</span>
                    </div>
                    <!--c2-->
                    <div class="col-2" style="text-align: center;font-size:13px">
                        <span>O</span>
                    </div>
                    <div class="col-3">
                        <input name="c2" class="form-control @error('c2') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->c2 }}">
                        <span class="text-danger">@error('c2') {{ $errors->first('c2') }} @enderror</span>
                    </div>
                    </div>
                
                <!--c1-c2-->   
                <!--c3-->
                <div class="row sm-4 justify-content-between">
                    <div class="col-2" style="text-align: center;font-size:13px">
                        <span>P</span>
                    </div>
                    <div class="col-3">
                        <input name="c3" class="form-control @error('c3') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->c3 }}">
                        <span class="text-danger">@error('c3') {{ $errors->first('c3') }} @enderror</span>
                    </div>
                    <!--c4-->
                    <div class="col-2" style="text-align: center;font-size:13px">
                        <span>Q</span>
                    </div>
                    <div class="col-3">
                        <input name="c4" class="form-control @error('c4') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->c4 }}">
                        <span class="text-danger">@error('c4') {{ $errors->first('c4') }} @enderror</span>
                    </div>
                    </div>
                
                <!--c3-c4--> 
                <!--c5-->
                <div class="row sm-4 justify-content-between">
                    <div class="col-2" style="text-align: center;font-size:13px">
                        <span>R</span>
                    </div>
                    <div class="col-3">
                        <input name="c5" class="form-control @error('c5') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->c5 }}">
                        <span class="text-danger">@error('c5') {{ $errors->first('c5') }} @enderror</span>
                    </div>
                    <!--c6-->
                    <div class="col-2" style="text-align: center;font-size:13px">
                        <span>S</span>
                    </div>
                    <div class="col-3">
                        <input name="c6" class="form-control @error('c6') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->c6 }}">
                        <span class="text-danger">@error('c6') {{ $errors->first('c6') }} @enderror</span>
                    </div>
                    </div>
                
                <!--c5-c6-->
                <!--c7-->
                <div class="row sm-4 justify-content-between">
                    <div class="col-2" style="text-align: center;font-size:13px">
                        <span>T</span>
                    </div>
                    <div class="col-3">
                        <input name="c7" class="form-control @error('c7') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->c7 }}">
                        <span class="text-danger">@error('c7') {{ $errors->first('c7') }} @enderror</span>
                    </div>
                    <!--c8-->
                    <div class="col-2" style="text-align: center;font-size:13px">
                        <span>U</span>
                    </div>
                    <div class="col-3">
                        <input name="c8" class="form-control @error('c8') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->c8 }}">
                        <span class="text-danger">@error('c8') {{ $errors->first('c8') }} @enderror</span>
                    </div>
                    </div>
                
                <!--c7-c8--> 
                <!--c9-->
                <div class="row sm-4 justify-content-between">
                    <div class="col-2" style="text-align: center;font-size:13px">
                        <span>V</span>
                    </div>
                    <div class="col-3">
                        <input name="c9" class="form-control @error('c9') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->c9 }}">
                        <span class="text-danger">@error('c9') {{ $errors->first('c9') }} @enderror</span>
                    </div>
                    <!--c10-->
                    <div class="col-2" style="text-align: center;font-size:13px">
                        <span>W</span>
                    </div>
                    <div class="col-3">
                        <input name="c10" class="form-control @error('c10') is-invalid @enderror" style="text-align:center;font-size:13px;padding:0%;height:20px;border:none;" value="{{ $result->c10 }}">
                        <span class="text-danger">@error('c10') {{ $errors->first('c10') }} @enderror</span>
                    </div>
                    </div>
                
                <!--c9-c10-->    
            
        </div>
             </div>

          
        
        <div class="row">
        <div class="col-md-12" style="top: 10px">
            <button type="submit" class="btn btn-success" id="submitButton" style="float:right;font-size:13px">Submit</button>
        </div>
        </div>
   
    </form>
    </div>
    </div>
    </div>
    @endforeach
    {!! $results->withQueryString()->links('pagination::bootstrap-5') !!}
            
       
    </div>
</div>
</div>


  