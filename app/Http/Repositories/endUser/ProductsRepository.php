<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\ProductsInterface;
use App\Http\Traits\ImageTrait;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsRepository implements ProductsInterface
{
    use ImageTrait;

    private $profileModel, $categoryModel, $productModel;

    public function __construct(Product $productModel, Category $categoryModel, Profile $profileModel)
    {
        $this->productModel = $productModel;
        $this->categoryModel = $categoryModel;
        $this->profileModel = $profileModel;
    }

    public function create()
    {

        $profile = $this->profileModel::where("user_id", Auth::user()->id)->first();
        $categories = $this->categoryModel::get(["name", "id"]);

        return \view("pages.endUser.dashboard.products.create", compact("profile", "categories"));
    }

    public function store($request)
    {
        $requests = $request->validated();


        DB::transaction(function () use ($requests) {

            $newImageName =  $this->uploadImage($requests["image"], $this->productModel::PATH);

            $product = $this->productModel::create([
                "name" => ["en" => $requests["name_en"], "ar" => $requests["name_ar"]],
                "image" => $newImageName,
                "category_id" => $requests["category_id"],
                "user_id" => auth()->id(),
                "price" => $requests["price"],
                "description" => $requests["description"],
                "condition" => $requests["condition"],
                "status" => "pindling",
                "visitors" => 0,
            ]);

            foreach ($requests["images"] as $image) {
                $imageName =  $this->uploadImage($image, $this->productModel::PATH);

                ProductImage::create([
                    "product_id" => $product->id,
                    "image" => $imageName
                ]);
            }
        });


        toast('Congrats product Added Successfully 😍 ', 'success');
        return redirect()->route("dashboard.product.create");
    }
}
