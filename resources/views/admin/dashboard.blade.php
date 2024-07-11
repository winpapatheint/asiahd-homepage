<x-auth-layout>
    <div class="container">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <h1 class="mt-4">開発実績</h1>
                @include('components.messagebox')
                <div class="custom-form-container shadow">
                    <form action="{{ url('/addproject') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="photo" name="photo" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Paragraph</label>
                            <textarea class="form-control" id="paragraph" name="paragraph" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary form-submit-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
