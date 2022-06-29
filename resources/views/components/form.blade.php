<div class="px-4 py-5 my-5 text-center">
    <h2 class="display-5 fw-bold"> {{ ucfirst($type) }}</h2>
    <div class="col-lg-6 mx-auto">
        <form class="form-code" action="{{ url($type) }}" method="post">
            @csrf
            <input type="text" class="form-control" id="formGroupExampleInput-{{$type}}"  name="CodeMessage" placeholder="Insert Your Message">
            <input type="submit" class="btn btn-secondary btn-dark btn-block saveCodeResult" name="CodeButton" value ="Code"">
            @include('form.icone')
            <input type="text" class="form-control codeMessageResult" name="codeMessageResult" placeholder="Code Message">
        </form>
    </div>
</div>