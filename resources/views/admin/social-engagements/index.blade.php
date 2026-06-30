<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Social Engagements') }}
            </h2>
            <a href="{{ route('admin.dashboard') }}" class="text-sm text-indigo-600 hover:text-indigo-900">
                {{ __('Back to dashboard') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-3xl">

                    @if (session('status') === 'social-engagement-created')
                        <div class="mt-4 rounded-lg p-4 text-sm mb-4" style="background-color: #ecfdf5; border: 1px solid #bbf7d0; color: #166534;">
                            {{ __('Social engagement created successfully!') }}
                        </div>
                    @endif

                    @if (session('status') === 'social-engagement-updated')
                        <div class="mt-4 rounded-lg p-4 text-sm mb-4" style="background-color: #ecfdf5; border: 1px solid #bbf7d0; color: #166534;">
                            {{ __('Social engagement updated successfully!') }}
                        </div>
                    @endif

                    @if (session('status') === 'social-engagement-deleted')
                        <div class="mt-4 rounded-lg p-4 text-sm mb-4" style="background-color: #ecfdf5; border: 1px solid #bbf7d0; color: #166534;">
                            {{ __('Social engagement deleted successfully!') }}
                        </div>
                    @endif

                    <h3 class="text-lg font-medium text-gray-900 mb-4">
                        {{ isset($engagement) && $engagement ? __('Edit Social Engagement') : __('Create Social Engagement') }}
                    </h3>

                    <form method="POST" action="{{ isset($engagement) && $engagement ? route('admin.social-engagements.update', $engagement) : route('admin.social-engagements.store') }}" class="space-y-4">
                        @csrf
                        @if (isset($engagement) && $engagement)
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="name">{{ __('Name') }}</label>
                                <input id="name" name="name" type="text" value="{{ old('name', $engagement->name ?? '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                @error('name')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="link">{{ __('Link') }}</label>
                                <input id="link" name="link" type="url" value="{{ old('link', $engagement->link ?? '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                @error('link')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="icon_class">{{ __('Icon Class') }}</label>
                                <input id="icon_class" name="icon_class" type="text" value="{{ old('icon_class', $engagement->icon_class ?? '') }}" placeholder="fab fa-linkedin-in" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                @error('icon_class')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="sort_order">{{ __('Sort Order') }}</label>
                                <input id="sort_order" name="sort_order" type="number" min="0" value="{{ old('sort_order', $engagement->sort_order ?? 0) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                @error('sort_order')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <input id="is_active" name="is_active" type="checkbox" value="1" {{ old('is_active', $engagement->is_active ?? true) ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="is_active" class="ml-2 block text-sm text-gray-900">{{ __('Active') }}</label>
                        </div>

                        <div class="flex items-center gap-3 mt-4">
                            <!-- <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                {{ isset($engagement) && $engagement ? __('Update') : __('Create') }}
                            </button> -->
                            <x-primary-button>{{ isset($engagement) && $engagement ? __('Update') : __('Create') }}</x-primary-button>
                            
                            @if (isset($engagement) && $engagement)
                                <a href="{{ route('admin.social-engagements.index') }}" class="text-sm text-gray-600 hover:text-gray-900">{{ __('Cancel') }}</a>
                            @endif
                        </div>
                        
                    </form>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="flex items-center justify-between mb-5">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ __('Existing Social Engagements') }}</h3>
                        <p class="text-sm text-gray-500 mt-1">{{ __('Manage your visible social links from here.') }}</p>
                    </div>
                </div>

                @if ($socialEngagements->isEmpty())
                    <div class="rounded-lg border border-dashed border-gray-300 bg-gray-50 px-4 py-8 text-center mt-4">
                        <p class="text-sm text-gray-600">{{ __('No social engagements have been added yet.') }}</p>
                    </div>
                @else
                    <div class="overflow-hidden rounded-xl border border-gray-200 shadow-sm mt-4">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">{{ __('Name') }}</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">{{ __('Link') }}</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">{{ __('Icon') }}</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">{{ __('Order') }}</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">{{ __('Active') }}</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($socialEngagements as $item)
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $item->name }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-600">
                                                <a href="{{ $item->link }}" target="_blank" rel="noopener noreferrer" class="text-indigo-600 hover:text-indigo-900 break-all">
                                                    {{ $item->link }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-600">
                                                @if ($item->icon_class)
                                                    <span class="inline-flex rounded-full bg-indigo-50 px-2.5 py-1 text-xs font-medium text-indigo-700">
                                                        {{ $item->icon_class }}
                                                    </span>
                                                @else
                                                    <span class="text-gray-400">—</span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-600">
                                                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 text-sm font-semibold text-gray-700">
                                                    {{ $item->sort_order }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-600">
                                                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-gray-100 text-sm font-semibold text-gray-700">
                                                    {{ $item->is_active ? __('Yes') : __('No') }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-600">
                                                <div class="flex flex-wrap items-center gap-2">
                                                    <a href="{{ route('admin.social-engagements.edit', $item) }}" class="inline-flex items-center rounded-md bg-indigo-50 px-3 py-1.5 text-sm font-medium text-indigo-700 hover:bg-indigo-100">
                                                        {{ __('Edit') }}
                                                    </a>
                                                    <form method="POST" action="{{ route('admin.social-engagements.destroy', $item) }}" onsubmit="return confirm('Delete this social engagement?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="inline-flex items-center rounded-md bg-red-50 px-3 py-1.5 text-sm font-medium text-red-700 hover:bg-red-100">
                                                            {{ __('Delete') }}
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
