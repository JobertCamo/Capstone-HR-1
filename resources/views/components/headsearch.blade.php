<div class="w-full h-full bg-no-repeat bg-cover headsearch text-slate-50">
    <div class="flex flex-col items-center justify-end w-full h-full bg-black bg-opacity-30">
        <div class="mb-5 text-xl font-bold">
            <h1>Select Department and Role</h1>
        </div>
        <div class="flex mx-10 mb-10 space-x-5">
            <div>
                <label for="department">Department:</label>
                <select id="department" onchange="updateRoles()" class="drop">
                    <option value="">--Select Department--</option>
                    <option value="product">Product Management</option>
                    <option value="marketing">Marketing and Sales</option>
                    <option value="customer">Customer Service</option>
                    <option value="logistics">Logistics and Supply Chain</option>
                    <option value="finance">Finance and Administration</option>
                    <option value="it">IT and Technical Support</option>
                    <option value="visual">Visual Merchandising</option>
                    <option value="hr">Human Resources</option>
                </select>
            </div>
            <div>
                <label for="role">Role:</label>
                <select id="role" class="drop">
                    <option value="">--Select Role--</option>
                </select>
            </div>
        </div>
    </div>
</div>