
{{csrf_field()}}
             @php $input="name"   @endphp
                  <div class="row">

                    <div class="col-md-6 px-1">
                      <div class="form-group">
                          <label><b>Video {{$input}}</b></label>

                        <input type="text" name="{{$input}}" value="{{isset($row)? $row->$input:""}}"  class="form-control" placeholder="{{$input}}" >
                      </div>


                                @if ($errors->has("$input"))
                                    <span class="help-block">
                                        <strong>{{ $errors->first($input) }}</strong>
                                    </span>
                                @endif
                    </div>





             @php $input="des"   @endphp


                    <div class="col-md-6 px-1">
                      <div class="form-group">
                          <label><b>Description</b></label>

                        <input type="text" name="{{$input}}" value="{{isset($row)? $row->$input : ""}}"  class="form-control" placeholder="{{$input}}" >
                      </div>


                                @if ($errors->has("$input"))
                                    <span class="help-block">
                                        <strong>{{ $errors->first($input) }}</strong>
                                    </span>
                                @endif
                    </div>

                  </div>
             @php $input="Link"   @endphp
                  <div class="row">

                    <div class="col-md-6 px-1">
                      <div class="form-group">
                          <label><b>Link</b></label>

                        <input type="text" name="{{$input}}" value="{{isset($row)? $row->$input : ""}}"  class="form-control" placeholder="{{$input}}" >
                      </div>


                                @if ($errors->has("$input"))
                                    <span class="help-block">
                                        <strong>{{ $errors->first($input) }}</strong>
                                    </span>
                                @endif
                    </div>

                  </div>
             @php $input="publish"   @endphp

                   <div class="row">
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                          <label><b>Publish</b></label>
                        <select name="{{$input}}"  class="form-control">
                            <option value="1"{{isset($row)&& $row->$input==1 ?"selected":""}}  placeholder="{{$input}}" >published</option>
                            <option value="0"{{isset($row)&& $row->$input==0 ?"selected":""}}  placeholder="{{$input}}" >hidden</option>
                        </select>
                        </div>


                                @if ($errors->has("$input"))
                                    <span class="help-block">
                                        <strong>{{ $errors->first($input) }}</strong>
                                    </span>
                                @endif
                    </div>

                  </div>



             @php $input="Category_id"   @endphp
                  <div class="row">

                    <div class="col-md-6 px-1">
                      <div class="form-group">
                          <label><b>Category Id</b></label>
                        <select  name="{{$input}}"  class="form-control">

                       @foreach($categories as $category)

                        <option   value="{{$category->id}}" {{isset($row)&&$category->id==$row->$input ?"selected":""}}   placeholder="{{$input}}" >

                        {{$category->name}}

                        </option>

                       @endforeach

                      </select>
                      </div>


                                @if ($errors->has("$input"))
                                    <span class="help-block">
                                        <strong>{{ $errors->first($input) }}</strong>
                                    </span>
                                @endif
                    </div>


                  </div>

             @php $input="image"   @endphp

                   <div class="row">
                    <div class="col-md-6 px-1">

                        <label><b>Select Image</b></label>
                        <br>
                        <br>
                        <input type="file" name="{{$input}}" value="{{isset($row)?$row->$input:""}}"   class="form-control">
                      </div>



                                @if ($errors->has("$input"))
                                    <span class="help-block">
                                        <strong>{{ $errors->first($input) }}</strong>
                                    </span>
                                @endif
                    </div>


              @php $input="src"   @endphp

                   <div class="row">
                    <div class="col-md-6 px-1">

                        <label><b>Select Video</b></label>
                        <br>
                        <br>
                        <input type="file" name="{{$input}}" value="{{isset($row)?$row->$input:""}}"   class="form-control">
                      </div>
                                @if ($errors->has("$input"))
                                    <span class="help-block">
                                        <strong>{{ $errors->first($input) }}</strong>
                                    </span>
                                @endif
                    </div>
