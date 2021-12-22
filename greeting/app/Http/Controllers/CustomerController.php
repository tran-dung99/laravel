<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Compound;

class CustomerController extends Controller
{
    protected $customerRepository;


    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function showList() {
        $customers = $this->customerRepository->getAll();
        return view("backend.customer.list",compact("customers"));
    }

    public function deleteCustomer($id)
    {
       $this->customerRepository->delete($id);
        return redirect()->route("customers");
    }

    public function showFormCreate()
    {
        return view("backend.customer.create");
    }

    public function createNewCustomer(Request $request)
    {
        $this->customerRepository->create($request);
        return redirect()->route("customers");
    }

    public function detail($id)
    {
        $customer = $this->customerRepository->getById($id);
//        dd($customer);
        return view("backend.customer.detail",compact("customer"));
    }

    public function showFormUpdate($id) {
        $customer = $this->customerRepository->getById($id);
//        dd($customer);
        return view("backend.customer.update",compact("customer"));
    }

    public function updateCustomer(Request $request)
    {
//        dd($request);
        $this->customerRepository->update($request);
        return redirect()->route("customers");
    }

    public function search(Request $request) {
        $customers = $this->customerRepository->search($request);
        return view("backend.customer.list",compact('customers'));
    }
}
