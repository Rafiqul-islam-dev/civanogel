<div class="largeSlider">
    @forelse ($property->gallery as $item)
    <div class="single-item" style="background-image: url('{{ $item->name }}')"></div>
    @empty


    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-1.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-2.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-3.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-4.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-1.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-2.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-3.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-4.jpg')"></div>
    @endforelse
</div>
<div class="thumbSlider">
    @forelse ($property->gallery as $item)
    <div class="single-item" style="background-image: url('{{ $item->name }}')"></div>
    @empty

    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-1.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-2.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-3.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-4.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-1.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-2.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-3.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-4.jpg')"></div>
    @endforelse
</div>
