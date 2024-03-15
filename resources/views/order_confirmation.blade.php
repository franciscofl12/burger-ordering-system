<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-200 text-gray-900">
    <div class="flex justify-center items-center h-screen">
        <div class="rounded-md relative w-72 shadow-2xl p-3 bg-white">
            <div class="py-2">
                <div class="text-center text-xl font-bold">ORDER</div>
                <div class="text-center text-xs font-bold">Order Details</div>
            </div>
            <div class="text-center text-xs font-bold mb-1">~~~~~~~~~~~~~~~~~~~~~~~~~~~~</div>
            <div class="text-xs pl-2">
                <div class="text-xs mb-1">Customer: {{ $order->customer_name }}</div>
                <div class="text-xs mb-1">Telephone: {{ $order->telephone }}</div>
                <div>Order Number: {{ $order->id }}</div>
            </div>
            <div class="border-double border-t-4 border-b-4 border-l-0 border-r-0 border-gray-900 my-3">
                <div class="flex text-sm pt-1 px-1">
                    <span class="w-2/6">Name</span>
                    <span class="w-2/6 text-right">Price</span>
                    <span class="w-2/6 text-right">Number</span>
                </div>
                <div class="border-dashed border-t border-b border-l-0 border-r-0 border-gray-900 mt-1 my-2 py-2 px-1">
                    <div class="flex justify-between text-sm">
                        <span class="w-2/6 truncate">{{ $order->burger_type }}</span>
                        <span class="w-2/6 text-right">10 $</span>
                        <span class="w-2/6 text-right">1</span>
                    </div>
                </div>
            </div>
            <div class="text-xs">
                <div class="text-right">
                    <div>Time: {{ $order->created_at }}</div>
                    <div class="font-bold text-sm">Aggregate: 10$</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
