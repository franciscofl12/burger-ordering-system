<!DOCTYPE html>
<html>
<head>
    <title>Admin - Burger Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen">
    <div class="flex justify-center items-center">
        <div class="bg-white rounded-lg w-2/3 lg:w-1/2 xl:w-1/3 m-4 p-4 shadow">
            <div>
                <span class="text-gray-900 relative inline-block order-date uppercase font-medium tracking-widest">Recent Orders</span>
                @foreach($orders as $order)
                    <div class="flex mb-4">
                        <div class="w-2/12">
                            <span class="text-sm text-gray-600 block">{{ $order->created_at->format('h:ia') }}</span>
                        </div>
                        <div class="w-10/12">
                            <span class="text-sm font-semibold block">{{ $order->customer_name }} - {{ $order->telephone }}</span>
                            <span class="text-sm">#1 - Burger {{ $order->burger_type }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
