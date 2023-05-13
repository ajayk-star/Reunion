<div>
    {{-- <form action="{{ $action }}" method="{{ $method }}" enctype="{{ $enctype }}"
        wire:submit.prevent="submitForm">
        @csrf
        @method($method) --}}
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Payment</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 my-2">
                        <label for="inputEmail4">Name</label>
                        <input name="name" type="text"
                            class="form-control @error('name') is-invalid @enderror" id="name"
                            wire:model="name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="inputEmail4">Phone</label>
                        <input name="phone" type="text"
                            class="form-control @error('phone') is-invalid @enderror" id="phone"
                            wire:model="phone">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 my-2">
                        <label for="inputEmail4">Amount</label>
                        <input name="amount" type="text"
                            class="form-control @error('amount') is-invalid @enderror" id="amount"
                            wire:model="amount">
                        @error('amount')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-12 my-2">
                        <button class="btn btn-outline-success submit-button"
                        @if ($isValidatedForm) type="submit" @else type="button" wire:click="submitForm()" @endif>Pay</button>
                    </div>
                </div>
            </div>
        </div>
        @if ($isValidatedForm)
        <script>
            $('.submit-button').click();
        </script>
    @endif
    </div>
</div>
