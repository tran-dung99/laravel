<?php

namespace App\Http\Controllers;

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
        return view("customer.list",compact("customers"));
    }

    public function deleteCustomer($id)
    {
       $this->customerRepository->delete($id);
        return redirect()->route("customers");
    }

    public function showFormCreate()
    {
        return view("customer.create");
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
        return view("customer.detail",compact("customer"));
    }

    public function showFormUpdate($id) {
        $customer = $this->customerRepository->getById($id);
//        dd($customer);
        return view("customer.update",compact("customer"));
    }

    public function updateCustomer(Request $request)
    {
        $this->customerRepository->update($request);
//        dd($request);
        return redirect()->route("customers");
    }
}
