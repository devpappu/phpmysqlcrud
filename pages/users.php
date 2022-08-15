<?php  include('backend/database.php'); ?>

<!-- <?php $results = mysqli_query($conn, "SELECT * FROM user"); ?> -->


<!-- component -->
<div class="mt-6 bg-gray-50 min-h-screen">
    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead class=" bg-gradient-to-tr from-indigo-600 to-purple-600">
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Id
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Name
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Address
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($results)) { ?>
							<tr class="p-2 my-2">
						
							<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center"><?php echo $row['id']; ?></p>
                            </td>
							<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center"><?php echo $row['name']; ?></p>
                            </td>

							<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center"><?php echo $row['address']; ?></p>
                            </td>
								<td class="text-right px-5 py-5 border-b border-gray-200 bg-white text-sm">

									<a href="pages/edit.php?id=<?php echo $row['id']; ?>"  class="del_btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none   focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>

									<a href="function.php?delete=<?php echo $row['id']; ?>"  class="del_btn  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none   focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Delete</a>

								</td>
								<td>
								</td>
							</tr>
						<?php } ?>
                    </tbody>
                </table>
        </div>
</div>