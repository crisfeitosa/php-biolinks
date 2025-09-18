@props(['value'])
  <textarea {{ $attributes }}
    class="textarea textarea-bordered w-full">{{ $value }}</textarea>
  @error('description')
    <span>{{ $message }}</span>
  @enderror