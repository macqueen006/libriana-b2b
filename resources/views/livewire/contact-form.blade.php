<div>
    <div class="flex flex-col border border-taupe/40 rounded-xl p-4 sm:p-6 lg:p-10">

        @if($successMessage)
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                {{ $successMessage }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="mt-6 grid gap-4 lg:gap-6">
                <div>
                    <label for="fullname" class="block mb-2 text-sm text-background font-medium uppercase">
                        Full name
                    </label>
                    <input type="text"
                           wire:model.live="fullname"
                           id="fullname"
                           name="fullname"
                           class="py-2.5 sm:py-3 px-4 block w-full border-taupe/40 rounded-lg sm:text-sm focus:border-orange focus:ring-orange disabled:opacity-50 disabled:pointer-events-none bg-body @error('fullname') @enderror">
                    @error('fullname')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                    <div>
                        <label for="phone" class="block mb-2 text-sm text-background font-medium uppercase">
                            Phone
                        </label>
                        <input wire:ignore type="tel"
                               wire:model.live="phone"
                               id="phone"
                               name="phone"
                               class="py-2.5 sm:py-3 px-4 block w-full border-taupe/40 rounded-lg sm:text-sm focus:border-orange focus:ring-orange disabled:opacity-50 disabled:pointer-events-none bg-body @error('phone') @enderror">
                        @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm text-background font-medium uppercase">
                            Email
                        </label>
                        <input type="email"
                               wire:model.live="email"
                               id="email"
                               name="email"
                               autocomplete="email"
                               class="py-2.5 sm:py-3 px-4 block w-full border-taupe/40 rounded-lg sm:text-sm focus:border-orange focus:ring-orange disabled:opacity-50 disabled:pointer-events-none bg-body @error('email') @enderror">
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- End Grid -->

                <div>
                    <label for="message" class="block mb-2 text-sm text-background font-medium uppercase">
                        Message
                    </label>
                    <textarea wire:model.live="message"
                              id="message"
                              name="message"
                              rows="4"
                              class="py-2.5 sm:py-3 px-4 block w-full border-taupe/40 rounded-lg sm:text-sm focus:border-orange focus:ring-orange disabled:opacity-50 disabled:pointer-events-none bg-body @error('message') @enderror"></textarea>
                    @error('message')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-6 grid">
                <button type="submit"
                        wire:loading.attr="disabled"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-orange text-white hover:bg-primary-shade-40 focus:outline-hidden focus:bg-primary-shade-10 disabled:opacity-50 disabled:pointer-events-none">
                    <span wire:loading.remove>Send inquiry</span>
                    <svg wire:loading class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span wire:loading>Sending...</span>
                </button>
            </div>
        </form>

        <div class="mt-3 text-center">
            <p class="text-sm text-background/70">
                We'll get back to you in 1-2 business days.
            </p>
        </div>
    </div>
</div>
