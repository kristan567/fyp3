            <!-- Modal -->
            <div class="modal fade" id="editcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                    <form method="POST" action="{{ route('category.update', $category->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Enter Category Name</label>
                                <input type="text"  class="form-control form-control-lg" name="title" :value=" $category->title "  required autofocus />
                            </div>
                        
                                <div class="form-group">
                                    <select  class="form-control"  name="project_id">
                                        <option value="">Select Project</option>  
                                    
                                          
                                      
                                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                                        

                                   
                
                                    </select>
                                </div>
                       
            
                            <div class="form-group">
                                <label for="">Enter Description</label>
                                <textarea id="description" cols="30" rows="4" class="block mt-1 w-full" name="description" :value=" $category->description" required autofocus  style="border-radius: 5px;"  ></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <div class="flex items-center justify-end mt-4">
           
                                <x-primary-button class="ms-4" data-dismiss="modal">
                                    {{ __('Cancel') }}
                                </x-primary-button>

                                <x-primary-button class="ms-4">
                                    {{ __('update') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>