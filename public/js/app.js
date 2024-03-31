window.addEventListener("load", () => {
    (function () {
        buildChart(
            "#hs-multiple-area-charts",
            (mode) => ({
                chart: {
                    height: 300,
                    type: "area",
                    toolbar: {
                        show: false,
                    },
                    zoom: {
                        enabled: false,
                    },
                },
                series: [
                    {
                        name: "Income",
                        data: [
                            18000, 51000, 60000, 38000, 88000, 50000, 40000,
                            52000, 88000, 80000, 60000, 70000,
                        ],
                    },
                    {
                        name: "Outcome",
                        data: [
                            27000, 38000, 60000, 77000, 40000, 50000, 49000,
                            29000, 42000, 27000, 42000, 55000.55,
                        ],
                    },
                ],
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    curve: "straight",
                    width: 2,
                },
                grid: {
                    strokeDashArray: 2,
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        type: "vertical",
                        shadeIntensity: 1,
                        opacityFrom: 0.1,
                        opacityTo: 0.8,
                    },
                },
                xaxis: {
                    type: "category",
                    tickPlacement: "on",
                    categories: [
                        "25 January 2023",
                        "26 January 2023",
                        "27 January 2023",
                        "28 January 2023",
                        "29 January 2023",
                        "30 January 2023",
                        "31 January 2023",
                        "1 February 2023",
                        "2 February 2023",
                        "3 February 2023",
                        "4 February 2023",
                        "5 February 2023",
                    ],
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                    crosshairs: {
                        stroke: {
                            dashArray: 0,
                        },
                        dropShadow: {
                            show: false,
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    labels: {
                        style: {
                            colors: "#9ca3af",
                            fontSize: "13px",
                            fontFamily: "Inter, ui-sans-serif",
                            fontWeight: 400,
                        },
                        formatter: (title) => {
                            let t = title;

                            if (t) {
                                const newT = t.split(" ");
                                t = `${newT[0]} ${newT[1].slice(0, 3)}`;
                            }

                            return t;
                        },
                    },
                },
                yaxis: {
                    labels: {
                        align: "left",
                        minWidth: 0,
                        maxWidth: 140,
                        style: {
                            colors: "#9ca3af",
                            fontSize: "13px",
                            fontFamily: "Inter, ui-sans-serif",
                            fontWeight: 400,
                        },
                        formatter: (value) =>
                            value >= 1000 ? `${value / 1000}k` : value,
                    },
                },
                tooltip: {
                    x: {
                        format: "MMMM yyyy",
                    },
                    y: {
                        formatter: (value) =>
                            `$${value >= 1000 ? `${value / 1000}k` : value}`,
                    },
                    custom: function (props) {
                        const { categories } = props.ctx.opts.xaxis;
                        const { dataPointIndex } = props;
                        const title = categories[dataPointIndex].split(" ");
                        const newTitle = `${title[0]} ${title[1]}`;

                        return buildTooltip(props, {
                            title: newTitle,
                            mode,
                            hasTextLabel: true,
                            wrapperExtClasses: "min-w-28",
                            labelDivider: ":",
                            labelExtClasses: "ms-2",
                        });
                    },
                },
                responsive: [
                    {
                        breakpoint: 568,
                        options: {
                            chart: {
                                height: 300,
                            },
                            labels: {
                                style: {
                                    colors: "#9ca3af",
                                    fontSize: "11px",
                                    fontFamily: "Inter, ui-sans-serif",
                                    fontWeight: 400,
                                },
                                offsetX: -2,
                                formatter: (title) => title.slice(0, 3),
                            },
                            yaxis: {
                                labels: {
                                    align: "left",
                                    minWidth: 0,
                                    maxWidth: 140,
                                    style: {
                                        colors: "#9ca3af",
                                        fontSize: "11px",
                                        fontFamily: "Inter, ui-sans-serif",
                                        fontWeight: 400,
                                    },
                                    formatter: (value) =>
                                        value >= 1000
                                            ? `${value / 1000}k`
                                            : value,
                                },
                            },
                        },
                    },
                ],
            }),
            {
                colors: ["#2563eb", "#9333ea"],
                fill: {
                    gradient: {
                        stops: [0, 90, 100],
                    },
                },
                grid: {
                    borderColor: "#e5e7eb",
                },
            },
            {
                colors: ["#3b82f6", "#a855f7"],
                fill: {
                    gradient: {
                        stops: [100, 90, 0],
                    },
                },
                grid: {
                    borderColor: "#374151",
                },
            }
        );
    })();
});

window.addEventListener("load", () => {
    (function () {
        buildChart(
            "#hs-bubble-chart",
            () => ({
                chart: {
                    height: "100%",
                    type: "bubble",
                    toolbar: {
                        show: false,
                    },
                    zoom: {
                        enabled: false,
                    },
                },
                series: [
                    { data: [[5, 6, 70]] },
                    { data: [[8, 4, 45]] },
                    { data: [[10, 9, 90]] },
                ],
                dataLabels: {
                    style: {
                        fontSize: "20px",
                        fontFamily: "Inter, ui-sans-serif",
                        fontWeight: "400",
                        colors: ["#fff", "#1f2937", "#fff"],
                    },
                    formatter: (value) => (value ? `${value}%` : ""),
                },
                fill: {
                    opacity: 1,
                },
                legend: {
                    show: false,
                },
                stroke: {
                    width: 5,
                },
                plotOptions: {
                    bubble: {
                        zScaling: false,
                        minBubbleRadius: 40,
                    },
                },
                grid: {
                    show: false,
                    padding: {
                        top: 0,
                        bottom: 0,
                        left: 0,
                        right: 0,
                    },
                },
                xaxis: {
                    min: 0,
                    max: 15,
                    labels: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    min: 0,
                    max: 15,
                    labels: {
                        show: false,
                    },
                },
                tooltip: {
                    enabled: false,
                },
                states: {
                    hover: {
                        filter: {
                            type: "none",
                        },
                    },
                },
            }),
            {
                colors: ["#22d3ee", "#FDE047", "#3b82f6"],
                markers: {
                    strokeColors: "rgb(255, 255, 255)",
                },
            },
            {
                colors: ["#3b82f6", "#22d3ee", "#e5e7eb"],
                markers: {
                    strokeColors: "rgb(38, 38, 38)",
                },
            }
        );
    })();
});

window.addEventListener("load", () => {
    (function () {
        let startDate = new Date("2024-01-01");
        let categories = Array.from({ length: 30 }, (_, i) => {
            let date = new Date(startDate);
            date.setDate(startDate.getDate() + i);
            return date.toLocaleDateString("en-GB", {
                day: "2-digit",
                month: "long",
                year: "numeric",
            });
        });

        buildChart(
            "#hs-single-bar-chart",
            (mode) => ({
                chart: {
                    type: "bar",
                    height: 300,
                    toolbar: {
                        show: false,
                    },
                    zoom: {
                        enabled: false,
                    },
                },
                series: [
                    {
                        name: "Sales",
                        data: Array.from({ length: 30 }, () =>
                            Math.floor(Math.random() * 100000)
                        ),
                    },
                ],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "16px",
                        borderRadius: 0,
                    },
                },
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    show: true,
                    width: 8,
                    colors: ["transparent"],
                },
                xaxis: {
                    categories: [
                        "1 Jan",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "30 Jan",
                    ],
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                    crosshairs: {
                        show: false,
                    },
                    labels: {
                        style: {
                            colors: "#9ca3af",
                            fontSize: "13px",
                            fontFamily: "Inter, ui-sans-serif",
                            fontWeight: 400,
                        },
                        offsetX: -2,
                        formatter: (title) => title.slice(0, 10),
                    },
                },
                yaxis: {
                    labels: {
                        align: "left",
                        minWidth: 0,
                        maxWidth: 140,
                        style: {
                            colors: "#9ca3af",
                            fontSize: "13px",
                            fontFamily: "Inter, ui-sans-serif",
                            fontWeight: 400,
                        },
                        formatter: (value) =>
                            value >= 1000 ? `${value / 1000}k` : value,
                    },
                },
                states: {
                    hover: {
                        filter: {
                            type: "darken",
                            value: 0.9,
                        },
                    },
                },
                tooltip: {
                    y: {
                        formatter: (value) =>
                            `$${value >= 1000 ? `${value / 1000}k` : value}`,
                    },
                    custom: function (props) {
                        const { categories } = props.ctx.opts.xaxis;
                        const { dataPointIndex } = props;
                        const title = categories[dataPointIndex];
                        const newTitle = `${title}`;

                        return buildTooltip(props, {
                            title: newTitle,
                            mode,
                            hasTextLabel: true,
                            wrapperExtClasses: "min-w-28",
                            labelDivider: ":",
                            labelExtClasses: "ms-2",
                        });
                    },
                },
                responsive: [
                    {
                        breakpoint: 568,
                        options: {
                            chart: {
                                height: 300,
                            },
                            plotOptions: {
                                bar: {
                                    columnWidth: "14px",
                                },
                            },
                            stroke: {
                                width: 8,
                            },
                            labels: {
                                style: {
                                    colors: "#9ca3af",
                                    fontSize: "11px",
                                    fontFamily: "Inter, ui-sans-serif",
                                    fontWeight: 400,
                                },
                                offsetX: -2,
                                formatter: (title) => title.slice(0, 3),
                            },
                            yaxis: {
                                labels: {
                                    align: "left",
                                    minWidth: 0,
                                    maxWidth: 140,
                                    style: {
                                        colors: "#9ca3af",
                                        fontSize: "11px",
                                        fontFamily: "Inter, ui-sans-serif",
                                        fontWeight: 400,
                                    },
                                    formatter: (value) =>
                                        value >= 1000
                                            ? `${value / 1000}k`
                                            : value,
                                },
                            },
                        },
                    },
                ],
            }),
            {
                colors: ["#2563eb", "#d1d5db"],
                grid: {
                    borderColor: "#e5e7eb",
                },
            },
            {
                colors: ["#3b82f6", "#2563eb"],
                grid: {
                    borderColor: "#374151",
                },
            }
        );
    })();
});

// Drag and Drop : Room Images Upload

document.addEventListener("DOMContentLoaded", function () {

    const fileInput = document.getElementById("file-input");
    const dropZone = document.getElementById("drop-zone");
    const selectedImages = document.getElementById("selected-images");
    const selectedFilesCount = document.getElementById("selected-files-count");
    const dragDropText = document.getElementById("drag-drop-text");
    
    fileInput.addEventListener("change", handleFiles);
    dropZone.addEventListener("dragover", handleDragOver);
    dropZone.addEventListener("dragleave", handleDragLeave);
    dropZone.addEventListener("drop", handleDrop);

    dropZone.addEventListener("click", () => {
        console.log("clicked");
    });

    function handleFiles() {
        const fileList = this.files;
        displayImages(fileList);
    }

    function handleDragOver(event) {
        event.preventDefault();
        dropZone.classList.add("border-blue-500");
        dropZone.classList.add("text-blue-500");
    }

    function handleDragLeave(event) {
        event.preventDefault();
        dropZone.classList.remove("border-blue-500");
        dropZone.classList.remove("text-blue-500");
    }

    function handleDrop(event) {
        event.preventDefault();
        const fileList = event.dataTransfer.files;
        displayImages(fileList);
        dropZone.classList.remove("border-blue-500");
        dropZone.classList.remove("text-blue-500");
    }

    function displayImages(fileList) {
        // Hide the drag and drop text when images are selected
        dragDropText.style.display = "none";

        for (const file of fileList) {
            const imageWrapper = document.createElement("div");
            imageWrapper.classList.add("relative", "mx-1");
            const image = document.createElement("img");
            image.src = URL.createObjectURL(file);
            image.classList.add("w-32", "h-24", "object-cover", "rounded-lg");
            const removeButton = document.createElement("button");
            removeButton.innerHTML = "&times;";
            removeButton.classList.add(
                "absolute",
                "top-1",
                "right-1",
                "h-6",
                "w-6",
                "bg-white",
                "text-black",
                "text-xs",
                "rounded-full",
                "flex",
                "items-center",
                "justify-center",
                "opacity-80",
                "hover:opacity-100",
                "transition-opacity",
                "focus:outline-none"
            );

            removeButton.addEventListener("click", () => {
                imageWrapper.remove();
                updateSelectedFilesCount();
            });

            imageWrapper.appendChild(image);
            imageWrapper.appendChild(removeButton);
            selectedImages.appendChild(imageWrapper);
        }
        updateSelectedFilesCount();
    }

    function updateSelectedFilesCount() {
        const count = dropZone.children.length;
        if (count > 0) {
            selectedFilesCount.textContent = `${count} file${
                count === 1 ? "" : "s"
            } selected`;
        } else {
            selectedFilesCount.textContent = "";
        }
    }
});
