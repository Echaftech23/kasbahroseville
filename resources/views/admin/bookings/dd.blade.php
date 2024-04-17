// -- Get the rooms with pagination
// SELECT * FROM rooms LIMIT 10 OFFSET 0;

// -- For each room, get the reservations with their payments in the specified date range
// SELECT * FROM reservations
// WHERE room_id = 2
// AND id IN (
// SELECT reservation_id FROM payments
// WHERE updated_at BETWEEN '2024-04-07 17:04:21' AND '2024-04-15 22:24:13'
// );

// -- For each reservation, get the payment
// SELECT * FROM payments WHERE reservation_id = 2;

// -- Calculate the total amount for each room
// SELECT SUM(totalAmount) FROM payments WHERE reservation_id IN (
// SELECT id FROM reservations WHERE room_id = 2
// );

// $rooms = Room::with('type')->latest()->paginate(10);
