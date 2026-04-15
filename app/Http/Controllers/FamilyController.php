<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FamilyController extends Controller
{
    /**
     * Create a new invitation link for a family
     */
    public function store(Request $request)
    {
        $request->validate([
            'family_name' => 'required|string|max:255',
        ]);

        // Generate unique link ID
        $linkId = Str::random(8);

        // Create family record
        $family = Family::create([
            'family_name' => $request->family_name,
            'link_id' => $linkId,
        ]);

        return response()->json([
            'success' => true,
            'link' => url('/?link_id=' . $linkId),
            'link_id' => $linkId,
            'family_id' => $family->id,
        ]);
    }

    /**
     * Update family with RSVP information
     */
    public function updateRsvp(Request $request, $linkId)
    {
        $request->validate([
            'contact_name' => 'required|string|max:255',
            'attending' => 'required|boolean',
            'guest_count' => 'required|integer|min:0',
        ]);

        $family = Family::where('link_id', $linkId)->firstOrFail();

        $family->update([
            'contact_name' => $request->contact_name,
            'attending' => $request->attending,
            'guest_count' => $request->guest_count,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'RSVP confirmado correctamente',
        ]);
    }

    /**
     * Get family by link ID
     */
    public function getByLinkId($linkId)
    {
        $family = Family::where('link_id', $linkId)->firstOrFail();

        return response()->json($family);
    }

    /**
     * Get all families with statistics
     */
    public function getAllFamilies()
    {
        $families = Family::orderBy('created_at', 'desc')->get();

        $totalConfirmed = 0;
        $totalGuests = 0;

        foreach ($families as $family) {
            if ($family->attending) {
                $totalConfirmed += $family->guest_count ?? 1;
                $totalGuests += ($family->guest_count ?? 1) - 1;
            }
        }

        return response()->json([
            'families' => $families,
            'total_confirmed' => $totalConfirmed,
            'total_guests' => $totalGuests,
            'total_families' => $families->count(),
        ]);
    }
}
