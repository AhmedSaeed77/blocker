<div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    إدخال اسم ووصف المشروع بالثلاث لغات
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> الاسم بالعربية</label>
                                        <input  value="{{ $project->name_ar }}"  class="form-control" name="name_ar" value="{{$project->name}}" type="text" >
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label"> الاسم باللغة الانجليزية</label>
                                        <input  value="{{ $project->name }}" class="form-control" name="name" placeholder="Input box " type="text">
                                    </div> 
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label"> الاسم باللغة الفرنسية</label>
                                        <input  value="{{ $project->name_fr }}" class="form-control" name="name_fr" placeholder="Input box " type="text">
                                    </div>
                                </div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg">
                                        <label class="form-label"> الوصف باللغة العربية</label>
                                        <textarea   class="form-control" name="description_ar" placeholder="Textarea" rows="3">{{ $project->description_ar }}</textarea>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label"> الوصف باللغة الانجليزية</label>
                                        <textarea   class="form-control" name="description" placeholder="Textarea" rows="3">{{ $project->description }}</textarea>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label"> الوصف باللغة الفرنسية </label>
                                        <textarea   class="form-control" name="description_fr" placeholder="Texarea" rows="3">{{ $project->description_fr }}</textarea>
                                    </div>
                                </div>
                                  <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> كود المشروع</label>
                                        <input   value="{{$project->code}}" class="form-control" name="code" placeholder="Input box" type="text">
                                    </div>

                                </div>
                            </div>