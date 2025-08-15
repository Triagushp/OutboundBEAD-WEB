<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use App\Models\Testimonial;

class AdminTestimoniController extends Controller
{
    public function index()
    {
        $testimonials = Testimoni::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function approve($id)
    {
        $testimonial = Testimoni::findOrFail($id);
        $testimonial->status = 'approved';
        $testimonial->save();

        return redirect()->back()->with('success', 'Review berhasil disetujui.');
    }

    public function reject($id)
    {
        $testimonial = Testimoni::findOrFail($id);
        $testimonial->status = 'rejected';
        $testimonial->save();

        return redirect()->back()->with('success', 'Review ditolak.');
    }

    public function destroy($id)
    {
        Testimoni::destroy($id);
        return redirect()->back()->with('success', 'Review dihapus.');
    }
}
