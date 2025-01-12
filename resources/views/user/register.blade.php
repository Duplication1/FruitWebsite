<x-layout>
    <form action="/user/register" method="POST">
        @csrf 
        <input type="text" name="name" placeholder="name" id="name"/>
        <input type="email" name="email" placeholder="email" id="email"/>
        <input type="password" name="password" placeholder="password" id="password"/>
        <button type="submit">Sign Up</button>
    </form>
</x-layout>