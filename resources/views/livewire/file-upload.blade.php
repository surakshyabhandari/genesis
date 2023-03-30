<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">

        <table class="table">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Signature</th>
            </tr>
            @foreach ($users as $key => $user)
            <tr>
                <td>{{$user->first_name.' '.$user->middle_name.' '.$user->last_name}}</td>
                <td>
                    {!! Form::file('signature[]',['class'=>'form-control','id'=>'signature','wire:model'=>'signatures']) !!}
                    @if($signatures  )
                        @isset($signatures[$key])
                            <img src="{{ $signatures[$key]->temporaryUrl() }}", alt="signature" width="100" height="100"/>
                        @endisset
                    @endif

                </td>
                <input type="hidden" name="user_id[]" value="{{$user->id}}" wire:model ='user_id'>
            </tr>
            @endforeach
        </table>
        <div class="form-group row mt-5">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>

    </form>
</div>
