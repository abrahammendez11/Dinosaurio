const getData = async (action, value, id_input) => {

    const formData = new FormData();
    formData.append('type', action);
    formData.append('value', value);

    try {
        const response = await fetch('/profile/getData', {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-Token": $('input[name="_token"]').val()
            },
        });

        if (!response.ok) {
            throw new Error(response.statusText);
        }

        const request = await response.json();

        if (request.code == 200) {
            $("#location").html(request.options);
        }
        
    } catch (error) {
        console.log(error);
    } finally {

    }

};