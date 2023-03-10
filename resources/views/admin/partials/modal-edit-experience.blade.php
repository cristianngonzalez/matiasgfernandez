<!-- Button add experience modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editexperience{{$experience->id}}Modal">
    Edit experience
</button>

<!-- Modal add experience -->
<div class="modal fade" id="editexperience{{$experience->id}}Modal" tabindex="-1" aria-labelledby="editexperience{{$experience->id}}ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="editexperience{{$experience->id}}ModalLabel">Edit experience</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <form action="{{route('admin.timeline.update')}}" method="POST">
                @csrf
                @method('post')
                <input type="text" value="{{$experience->id}}" name="id" hidden>
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" required placeholder="Experience title" value="{{$experience->title}}">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="company" required placeholder="Company name" value="{{$experience->company}}">
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" name="description" id="description" style="height: 100px" >{{$experience->description}}</textarea>
                        <label for="description">Job description</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="date" id="experience-date" value="{{$experience->date}}">
                    <label for="experience-date">Experience date</label>
                </div>

                <input type="submit" class="btn btn-success" value="Save experience">
            </form>

        </div>
    </div>
    </div>
</div>