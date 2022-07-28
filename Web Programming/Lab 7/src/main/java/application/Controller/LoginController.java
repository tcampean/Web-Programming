package application.Controller;

import application.DB.DBManager;
import application.Domain.User;

import javax.servlet.*;
import javax.servlet.http.*;
import java.io.IOException;

public class LoginController extends HttpServlet {

    public LoginController(){super();}


    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String username = request.getParameter("username");
        String password = request.getParameter("password");
        RequestDispatcher rd = null;

        DBManager dbmanager = new DBManager();
        User user = dbmanager.authenticate(username, password);
        if (user != null) {
            HttpSession session = request.getSession();

            session.setAttribute("user", user);
            session.setAttribute("fail",false);
            response.sendRedirect("home.jsp");

        } else {
            HttpSession session = request.getSession();
            session.setAttribute("fail",true);
            response.sendRedirect("index.jsp");
        }

    }
}
