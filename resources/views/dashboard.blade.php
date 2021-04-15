<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <form method="GET" action="/dashboard">
                    @csrf
                    <div class="row justify-content-md-center">
                      <div class="col-md-6">
                        <input type="text" name="search" class="form-control" placeholder="Search Schedule" aria-label="Search">
                      </div>
                      <div class="col-md-2">
                        <button class="btn btn-primary" type="submit">Search</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4 pt-4 justify-content-md-center">
            <div class="col-md-8">
                <table class="table">
                  <thead>
                    <tr>
                      {{-- <th scope="col">Teacher</th> --}}
                      <th scope="col">Batch No.</th>
                      <th scope="col">Day</th>
                      <th scope="col">Time</th>
                      <th scope="col">Program</th>
                      <th scope="col">Level</th>
                      <th scope="col">Slots Available</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($availableSchedules as $schedules)
                        <tr>
                          <td>{{$schedules->batch->batch_name}}</td>
                          {{-- <td>{{$schedules->user->name}}</td> --}}
                          <td>{{$schedules->day}}</td>
                          <td>{{$schedules->timeStarts}} to {{$schedules->timeEnds}}</td>
                          <td>{{$schedules->program->programName}}</td>
                          <td>{{$schedules->level->levelNo}} ({{$schedules->level->levelName}})</td>
                          <td>{{$schedules->slots}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
