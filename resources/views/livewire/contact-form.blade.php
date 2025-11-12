<div>
    <div class="flex flex-col border border-neutral/30 rounded-2xl p-6 sm:p-8 lg:p-10 bg-white shadow-sm">

        <form wire:submit.prevent="submit" class="space-y-6">
            <!-- Full Name -->
            <div>
                <label for="fullname" class="block mb-2 text-sm font-semibold text-taupe uppercase">
                    Full name
                </label>
                <input type="text"
                       wire:model.defer="fullname"
                       id="fullname"
                       name="fullname"
                       class="py-3 px-4 block w-full border border-taupe/30 rounded-lg text-body focus:border-primary focus:ring-1 focus:ring-primary disabled:opacity-50 disabled:pointer-events-none bg-neutral/10 placeholder:text-neutral/60">
                @error('fullname')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contact Details Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="phone" class="block mb-2 text-sm font-semibold text-taupe uppercase">
                        Phone
                    </label>
                    <input type="tel"
                           wire:model.defer="phone"
                           id="phone"
                           name="phone"
                           class="py-3 px-4 block w-full border border-taupe/30 rounded-lg text-body focus:border-primary focus:ring-1 focus:ring-primary bg-neutral/10 placeholder:text-neutral/60">
                    @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-semibold text-taupe uppercase">
                        Email
                    </label>
                    <input type="email"
                           wire:model.defer="email"
                           id="email"
                           name="email"
                           autocomplete="email"
                           class="py-3 px-4 block w-full border border-taupe/30 rounded-lg text-body focus:border-primary focus:ring-1 focus:ring-primary bg-neutral/10 placeholder:text-neutral/60">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <input type="text"
                       wire:model="honeypot"
                       class="sr-only"
                       name="honeypot"
                       tabindex="-1"
                       autocomplete="off">
            </div>

            <!-- Message -->
            <div>
                <label for="message" class="block mb-2 text-sm font-semibold text-taupe uppercase">
                    Message
                </label>
                <textarea wire:model.defer="message"
                          id="message"
                          name="message"
                          rows="4"
                          class="py-3 px-4 block w-full border border-taupe/30 rounded-lg text-body focus:border-primary focus:ring-1 focus:ring-primary bg-neutral/10 placeholder:text-neutral/60"></textarea>
                @error('message')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
            <div class="mt-6">
                <button type="submit"
                        wire:loading.attr="disabled"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-primary text-white hover:bg-secondary focus:ring-2 focus:ring-primary/50 transition disabled:opacity-50 disabled:pointer-events-none">
                    <span wire:loading.remove>Send Inquiry</span>
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

        <!-- Success message -->
        <div x-data="{ show: @entangle('successMessage').live }"
             @message-sent.window="setTimeout(() => $wire.successMessage = '', 5000)">
            @if($successMessage)
                <div x-show="show"
                     x-transition
                     class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    {{ $successMessage }}
                </div>
            @endif
        </div>

        <div class="mt-3 text-center">
            <p class="text-sm text-neutral-500">
                We'll get back to you in 1–2 business days.
            </p>
        </div>
    </div>
</div>
