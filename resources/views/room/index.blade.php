@foreach ($rooms as $room)
<ul>
{{$room->roomID}}
{{$room->roomDescription}}
{{$room->roomCapacity}}
{{$room->dateFrom}}
{{$room->dateTo}}
</ul>
@endforeach