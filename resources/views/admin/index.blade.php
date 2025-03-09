<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Admin Dashboard
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <div class="flex h-screen">
   <!-- Sidebar -->
   <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2">
    <div class="text-3xl font-semibold text-center">
     <i class="fas fa-user-shield">
     </i>
     <span>
      Admin
     </span>
    </div>
    <nav>
     <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700" href="#">
      <i class="fas fa-tachometer-alt">
      </i>
      <span class="ml-4">
       Dashboard
      </span>
     </a>
     <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700" href="#">
      <i class="fas fa-users">
      </i>
      <span class="ml-4">
       Users
      </span>
     </a>
     <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700" href="#">
      <i class="fas fa-cogs">
      </i>
      <span class="ml-4">
       Settings
      </span>
     </a>
     <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700" href="#">
      <i class="fas fa-chart-bar">
      </i>
      <span class="ml-4">
       Reports
      </span>
     </a>
     <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700" href="#">
      <i class="fas fa-envelope">
      </i>
      <span class="ml-4">
       Messages
      </span>
     </a>
     <a class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700" href="#">
      <i class="fas fa-sign-out-alt">
      </i>
      <span class="ml-4">
       Logout
      </span>
     </a>
    </nav>
   </div>
   <!-- Main Content -->
   <div class="flex-1 flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow py-4 px-6 flex justify-between items-center">
     <div class="text-2xl font-semibold">
      Dashboard
     </div>
     <div class="flex items-center space-x-4">
      <div class="relative">
       <input class="bg-gray-100 rounded-full py-2 px-4 pl-10 focus:outline-none" placeholder="Search..." type="text"/>
       <i class="fas fa-search absolute left-3 top-2.5 text-gray-400">
       </i>
      </div>
      <img alt="Profile picture of the admin" class="rounded-full w-10 h-10" height="40" src="https://storage.googleapis.com/a1aa/image/LCe-LnNwcqCLHZz4TwD3njFA7Z7yamr5-HV36dAsJnM.jpg" width="40"/>
     </div>
    </header>
    <!-- Main -->
    <main class="flex-1 overflow-y-auto p-6">
     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white p-6 rounded-lg shadow">
       <div class="flex items-center">
        <div class="p-3 rounded-full bg-blue-100 text-blue-500">
         <i class="fas fa-users fa-2x">
         </i>
        </div>
        <div class="ml-4">
         <h3 class="text-lg font-semibold">
          Users
         </h3>
         <p class="text-gray-500">
          1,200
         </p>
        </div>
       </div>
      </div>
      <!-- Card 2 -->
      <div class="bg-white p-6 rounded-lg shadow">
       <div class="flex items-center">
        <div class="p-3 rounded-full bg-green-100 text-green-500">
         <i class="fas fa-chart-line fa-2x">
         </i>
        </div>
        <div class="ml-4">
         <h3 class="text-lg font-semibold">
          Sales
         </h3>
         <p class="text-gray-500">
          $34,000
         </p>
        </div>
       </div>
      </div>
      <!-- Card 3 -->
      <div class="bg-white p-6 rounded-lg shadow">
       <div class="flex items-center">
        <div class="p-3 rounded-full bg-yellow-100 text-yellow-500">
         <i class="fas fa-comments fa-2x">
         </i>
        </div>
        <div class="ml-4">
         <h3 class="text-lg font-semibold">
          Comments
         </h3>
         <p class="text-gray-500">
          320
         </p>
        </div>
       </div>
      </div>
      <!-- Card 4 -->
      <div class="bg-white p-6 rounded-lg shadow">
       <div class="flex items-center">
        <div class="p-3 rounded-full bg-red-100 text-red-500">
         <i class="fas fa-bell fa-2x">
         </i>
        </div>
        <div class="ml-4">
         <h3 class="text-lg font-semibold">
          Notifications
         </h3>
         <p class="text-gray-500">
          15
         </p>
        </div>
       </div>
      </div>
      <!-- Card 5 -->
      <div class="bg-white p-6 rounded-lg shadow">
       <div class="flex items-center">
        <div class="p-3 rounded-full bg-purple-100 text-purple-500">
         <i class="fas fa-tasks fa-2x">
         </i>
        </div>
        <div class="ml-4">
         <h3 class="text-lg font-semibold">
          Tasks
         </h3>
         <p class="text-gray-500">
          8
         </p>
        </div>
       </div>
      </div>
      <!-- Card 6 -->
      <div class="bg-white p-6 rounded-lg shadow">
       <div class="flex items-center">
        <div class="p-3 rounded-full bg-indigo-100 text-indigo-500">
         <i class="fas fa-envelope fa-2x">
         </i>
        </div>
        <div class="ml-4">
         <h3 class="text-lg font-semibold">
          Messages
         </h3>
         <p class="text-gray-500">
          24
         </p>
        </div>
       </div>
      </div>
     </div>
     <!-- Recent Activities -->
     <div class="mt-8">
      <h2 class="text-2xl font-semibold mb-4">
       Recent Activities
      </h2>
      <div class="bg-white p-6 rounded-lg shadow">
       <ul class="space-y-4">
        <li class="flex items-center">
         <div class="p-3 rounded-full bg-blue-100 text-blue-500">
          <i class="fas fa-user-plus">
          </i>
         </div>
         <div class="ml-4">
          <p class="text-gray-700">
           New user registered
          </p>
          <p class="text-gray-500 text-sm">
           2 hours ago
          </p>
         </div>
        </li>
        <li class="flex items-center">
         <div class="p-3 rounded-full bg-green-100 text-green-500">
          <i class="fas fa-dollar-sign">
          </i>
         </div>
         <div class="ml-4">
          <p class="text-gray-700">
           New sale: $500
          </p>
          <p class="text-gray-500 text-sm">
           3 hours ago
          </p>
         </div>
        </li>
        <li class="flex items-center">
         <div class="p-3 rounded-full bg-yellow-100 text-yellow-500">
          <i class="fas fa-comment">
          </i>
         </div>
         <div class="ml-4">
          <p class="text-gray-700">
           New comment on post
          </p>
          <p class="text-gray-500 text-sm">
           4 hours ago
          </p>
         </div>
        </li>
        <li class="flex items-center">
         <div class="p-3 rounded-full bg-red-100 text-red-500">
          <i class="fas fa-exclamation-triangle">
          </i>
         </div>
         <div class="ml-4">
          <p class="text-gray-700">
           Server error reported
          </p>
          <p class="text-gray-500 text-sm">
           5 hours ago
          </p>
         </div>
        </li>
       </ul>
      </div>
     </div>
     <!-- User Table -->
     <div class="mt-8">
      <h2 class="text-2xl font-semibold mb-4">
       User List
      </h2>
      <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
       <table class="min-w-full bg-white">
        <thead>
         <tr>
          <th class="py-2 px-4 border-b border-gray-200">
           Name
          </th>
          <th class="py-2 px-4 border-b border-gray-200">
           Email
          </th>
          <th class="py-2 px-4 border-b border-gray-200">
           Role
          </th>
          <th class="py-2 px-4 border-b border-gray-200">
           Status
          </th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <td class="py-2 px-4 border-b border-gray-200">
           John Doe
          </td>
          <td class="py-2 px-4 border-b border-gray-200">
           john@example.com
          </td>
          <td class="py-2 px-4 border-b border-gray-200">
           Admin
          </td>
          <td class="py-2 px-4 border-b border-gray-200 text-green-500">
           Active
          </td>
         </tr>
         <tr>
          <td class="py-2 px-4 border-b border-gray-200">
           Jane Smith
          </td>
          <td class="py-2 px-4 border-b border-gray-200">
           jane@example.com
          </td>
          <td class="py-2 px-4 border-b border-gray-200">
           Editor
          </td>
          <td class="py-2 px-4 border-b border-gray-200 text-green-500">
           Active
          </td>
         </tr>
         <tr>
          <td class="py-2 px-4 border-b border-gray-200">
           Bob Johnson
          </td>
          <td class="py-2 px-4 border-b border-gray-200">
           bob@example.com
          </td>
          <td class="py-2 px-4 border-b border-gray-200">
           Viewer
          </td>
          <td class="py-2 px-4 border-b border-gray-200 text-red-500">
           Inactive
          </td>
         </tr>
         <tr>
          <td class="py-2 px-4 border-b border-gray-200">
           Alice Brown
          </td>
          <td class="py-2 px-4 border-b border-gray-200">
           alice@example.com
          </td>
          <td class="py-2 px-4 border-b border-gray-200">
           Admin
          </td>
          <td class="py-2 px-4 border-b border-gray-200 text-green-500">
           Active
          </td>
         </tr>
        </tbody>
       </table>
      </div>
     </div>
    </main>
   </div>
  </div>
 </body>
</html>
