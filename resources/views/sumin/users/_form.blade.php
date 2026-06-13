<div class="space-y-4">
    <div>
        <label class="block text-sm font-semibold text-gray-700">Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}" required
            class="mt-1 block w-full rounded-lg px-3 py-2 text-sm text-gray-700 placeholder-gray-400 bg-white border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-200' }} shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-500 dark:border-gray-700">
        @error('name')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-gray-700">Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" required
            class="mt-1 block w-full rounded-lg px-3 py-2 text-sm text-gray-700 placeholder-gray-400 bg-white border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-200' }} shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-500 dark:border-gray-700">
        @error('email')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-gray-700">Role</label>
        @php $current = old('role', $user->role ?? 'user'); @endphp
        <select name="role"
            class="mt-1 block w-full rounded-lg px-3 py-2 text-sm text-gray-700 bg-white border {{ $errors->has('role') ? 'border-red-500' : 'border-gray-200' }} shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent dark:bg-gray-800 dark:text-gray-100 dark:border-gray-700">
            <option value="user" {{ $current === 'user' ? 'selected' : '' }}>User</option>
            <option value="admin" {{ $current === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="superadmin" {{ $current === 'superadmin' ? 'selected' : '' }}>Superadmin</option>
        </select>
        @error('role')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-gray-700">Password</label>
        <input type="password" name="password"
            class="mt-1 block w-full rounded-lg px-3 py-2 text-sm text-gray-700 placeholder-gray-400 bg-white border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-200' }} shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-500 dark:border-gray-700">
        <p class="text-xs text-gray-500 mt-1">Leave empty to keep current password.</p>
        @error('password')
            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-gray-700">Confirm Password</label>
        <input type="password" name="password_confirmation"
            class="mt-1 block w-full rounded-lg px-3 py-2 text-sm text-gray-700 placeholder-gray-400 bg-white border border-gray-200 shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent dark:bg-gray-800 dark:text-gray-100 dark:placeholder-gray-500 dark:border-gray-700">
    </div>
</div>
