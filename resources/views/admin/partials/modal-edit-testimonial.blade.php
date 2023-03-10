<!-- Button add experience modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editexperience{{$testimonial->id}}Modal">
    Edit testimonial
</button>

<!-- Modal add experience -->
<div class="modal fade" id="editexperience{{$testimonial->id}}Modal" tabindex="-1" aria-labelledby="editexperience{{$testimonial->id}}ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="editexperience{{$testimonial->id}}ModalLabel">Edit testimonial</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form action="{{route('admin.testimonials.update')}}" method="POST">
                @csrf
                @method('post')
                <input type="text" value="{{$testimonial->id}}" name="id" hidden>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" required placeholder="Employer or coworker name" value="{{$testimonial->name}}">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="detail" required placeholder="Employer or coworker detail" value="{{$testimonial->detail}}">
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" name="testimonial" id="testimonial" style="height: 100px" >{{$testimonial->testimonial}}</textarea>
                        <label for="testimonial">Testimonial</label>
                    </div>
                </div>

                <input type="submit" class="btn btn-success" value="Save testimonial">
            </form>

        </div>
    </div>
    </div>
</div>