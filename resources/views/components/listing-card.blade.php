@props(['listing'])

<!-- Item 1 - Listings -->
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{asset('images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <!-- NAME -->
                <a href="/listings/{{$listing->id}}">{{$listing->name}}</a>
            </h3>
            <!-- AGE -->
            <div class="text-xl font-bold mb-4">{{$listing->age}}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4"><i class="fa-solid fa-location-dot"></i>{{$listing->location}}</div>
        </div>
    </div>
</div>