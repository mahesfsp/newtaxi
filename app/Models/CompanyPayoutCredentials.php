<?php

/**
 * Company Payout Credentials Model
 *
 * @package     NewTaxi
 * @subpackage  Model
 * @category    Company Payout Credentials
 * @author      Seen Technologies
 * @version     2.2.1
 * @link        https://seentechs.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPayoutCredentials extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_id', 'type'];
    
    // Return the companies default payout_preference details
    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id','id');
    }

    // Return the company default payout_preference details
    public function company_payout_preference()
    {
        return $this->belongsTo('App\Models\CompanyPayoutPreference','preference_id','id');
    }
}