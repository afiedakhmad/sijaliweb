<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataTables with TailwindCSS</title>
    @vite('resources/css/app.css')

    <!-- Datatables CSS -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal flex">
     <!-- Sidebar -->
     <aside class="bg-gray-800 text-white w-1/5 min-h-screen">
        <div class="p-4">
            <h1 class="text-2xl font-bold">Sidebar</h1>
            <ul class="mt-4">
                <li class="mb-2"><a href="#" class="text-gray-300 hover:text-white">Dashboard</a></li>
                <li><a href="#" class="text-gray-300 hover:text-white">Logout</a></li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1">
        <div class="container mx-auto px-2 w-full md:w-4/5 xl:w-3/5">
    <!-- Container -->
    <div class="container mx-auto px-2 w-full md:w-4/5 xl:w-3/5">
        <!-- Card -->
        <div id='recipients' class="mt-6 lg:mt-0 rounded shadow bg-white p-8">
            <table id="example" class="stripe hover min-w-full">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <td>Ridho Pangertu</td>
                        <td>Ridho@example.com</td>
                        <td class="role-label">Super Admin</td>
                        <td>
                            <button class="edit-role bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit Role</button>
                        </td>
                    <tr>
                        <td>Faris Iqbal</td>
                        <td>faris@xample.com</td>
                        <td class="role-label">Super Admin</td>
                        <td><button class="edit-role bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit Role</button></td>
                    </tr>
                    <tr>
                        <td>Farid Akbar</td>
                        <td>farid@example.com</td>
                        <td class="role-label">Super Admin</td>
                        <td><button class="edit-role bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit Role</button></td>
                    </tr>
                    <tr>
                        <td>Archangela Renata</td>
                        <td>renata@example.com</td>
                        <td class="role-label">Super Admin</td>
                        <td><button class="edit-role bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit Role</button></td>
                    </tr>
                    <tr>
                        <td>Aghnia Amalia</td>
                        <td>lia@example.com</td>
                        <td class="role-label">Super Admin</td>
                        <td><button class="edit-role bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit Role</button></td>
                    </tr>
                    <tr>
                        <td>Yulinda Agrestina</td>
                        <td>agres@example.com</td>
                        <td class="role-label">Super Admin</td>
                        <td><button class="edit-role bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit Role</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="editRoleModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <!-- Modal content -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Edit Role</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">Select a new role for the user.</p>
                                <select id="modalRoleSelect" class="form-select block w-full mt-1">
                                    <option value="Konseli">Konseli</option>
                                    <option value="Konselor">Konselor</option>
                                    <option value="Tim Konseling">Tim Konseling</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Pimpinan">Pimpinan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="save-modal-role w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">Save</button>
                    <button type="button" class="close-modal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
       $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true
            });

            // Event delegation for edit role buttons
            $('#example tbody').on('click', '.edit-role', function() {
                let row = $(this).closest('tr');
                let currentRole = row.find('.role-label').text();
                $('#modalRoleSelect').val(currentRole);
                $('#editRoleModal').removeClass('hidden');
            });

            // Close modal event
            $('.close-modal').click(function() {
                $('#editRoleModal').addClass('hidden');
            });

            // Save modal role
            $('.save-modal-role').click(function() {
                let newRole = $('#modalRoleSelect').val();
                let row = table.row($('.edit-role').closest('tr')).data();
                row[2] = newRole; // Update role in DataTable
                table.row($('.edit-role').closest('tr')).data(row).draw();
                $('#editRoleModal').addClass('hidden');
            });
        });

    </script>
</body>
</html>