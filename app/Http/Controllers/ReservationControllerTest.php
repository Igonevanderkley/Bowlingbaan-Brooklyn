namespace Tests\Unit;

use App\Http\Controllers\ReservationController;
use App\Models\Reservation;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class ReservationControllerTest extends TestCase
{
    public function test_update_method_validates_request_data()
    {
        $request = $this->createMock(Request::class);
        $reservation = $this->createMock(Reservation::class);

        $request->expects($this->once())
            ->method('validate')
            ->with([
                'userId' => 'required',
                'adults' => 'required',
                'children' => 'required',
                'packageId' => 'required',
                'fence' => 'required',
                'date' => 'required|date',
            ]);

        $controller = new ReservationController();
        $controller->update($request, $reservation);
    }
}