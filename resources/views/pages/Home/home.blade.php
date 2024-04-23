<x-guest-layout x-data="" x-cloak>
    <div class="w-full">
        <div class="flex flex-col">
            <livewire:nav-menu />
            <livewire:pages.home.header
                :title="$home->title_1"
                :text="$home->description_1"
                :image="$home->image_1"
            />
        </div>

        <livewire:pages.home.section1
            :title="$home->title_2"
            :text="$home->description_2"
            :image="$home->image_2"
            :items="$home->items_2"
        />
        <livewire:pages.home.section2
            :title="$home->title_3"
            :text="$home->description_3"
            :image="$home->image_3"
            :items="$home->items_3"
        />
        <livewire:pages.home.section3
            :title="$home->title_4"
            :images="$home->images_4"
        />
        <livewire:pages.home.section4
            :title="$home->title_5"
        />
        <livewire:pages.home.section5
            :title="$home->title_6"
        />
        <livewire:pages.home.section6
            :title="$home->title_7"
            :image="$home->image_7"
            :items="$home->items_7"
        />
        <livewire:pages.home.section7
            :title="$home->title_8"
        />
        <livewire:pages.home.contact :image="$home->image_9"/>

        <livewire:pages.components.sub-footer/>
        <livewire:pages.components.footer/>
    </div>
</x-guest-layout>
