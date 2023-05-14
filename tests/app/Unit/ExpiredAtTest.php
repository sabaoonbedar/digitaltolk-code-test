use PHPUnit\Framework\TestCase; //TestClass is important 
use Carbon\Carbon;
use Helpers\TeHelper;

class ExpiredAtTest extends TestCase
{
    public function testWillExpireAt()
    {
        $due_time = '2023-05-13 14:00:00';
        $created_at = '2023-05-10 10:00:00';

        $result = TeHelper::willExpireAt($due_time, $created_at);

        $expected = '2023-05-13 14:00:00';

        $this->assertEquals($expected, $result);
    }
}

