// Event Section
$(document).ready(function () {
  // Array of event objects
  const events = [
    {
      image: "https://via.placeholder.com/100x100.png?text=Event+1",
      from: "Jan 20, 2023",
      to: "Jan 22, 2023",
      location: "New York",
      category: "Movie Promotion",
      detailsUrl: "/events/1",
    },
    {
      image: "https://via.placeholder.com/100x100.png?text=Event+2",
      from: "Jan 20, 2023",
      to: "Jan 22, 2023",
      location: "New York",
      category: "Drama Night",
      detailsUrl: "/events/1",
    },
  ];

  // Append each event
  $.each(events, function (index, event) {
    let eventHtml = `
      <div class="event">
        <div class="details d-flex">
          <img src="${event.image}" /> 
          <p class="date">${event.from} - ${event.to}</p>
          <p class="category">${event.category}</p>
          <p class="location">${event.location}</p>
          <a href="${event.detailsUrl}" class="btn btn-primary">View Details</a>
        </div>
      </div>
    `;

    $(".events").append(eventHtml);
  });
});
