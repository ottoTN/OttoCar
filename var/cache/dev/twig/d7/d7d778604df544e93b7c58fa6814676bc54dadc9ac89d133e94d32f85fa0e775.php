<?php

/* utilisateur/index.html.twig */
class __TwigTemplate_212612781f0c7c15fe72cafcaa9da3eec222bd8a39d03b328798a9389cbb71de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96c9c5368e8dbae2fa874ff5269836a109e32780c86b1fbd0c3a58c72cb7e0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c9c5368e8dbae2fa874ff5269836a109e32780c86b1fbd0c3a58c72cb7e0db->enter($__internal_96c9c5368e8dbae2fa874ff5269836a109e32780c86b1fbd0c3a58c72cb7e0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $__internal_ef48041b3469c8570adabadbd1ff09a1d8f24d9038e7729609cc4c5470e6e808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef48041b3469c8570adabadbd1ff09a1d8f24d9038e7729609cc4c5470e6e808->enter($__internal_ef48041b3469c8570adabadbd1ff09a1d8f24d9038e7729609cc4c5470e6e808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96c9c5368e8dbae2fa874ff5269836a109e32780c86b1fbd0c3a58c72cb7e0db->leave($__internal_96c9c5368e8dbae2fa874ff5269836a109e32780c86b1fbd0c3a58c72cb7e0db_prof);

        
        $__internal_ef48041b3469c8570adabadbd1ff09a1d8f24d9038e7729609cc4c5470e6e808->leave($__internal_ef48041b3469c8570adabadbd1ff09a1d8f24d9038e7729609cc4c5470e6e808_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b016f499096886e7a66021aecbb5f16fd120113bda6daec792ea3420b7c691d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b016f499096886e7a66021aecbb5f16fd120113bda6daec792ea3420b7c691d5->enter($__internal_b016f499096886e7a66021aecbb5f16fd120113bda6daec792ea3420b7c691d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd214c22830205002b4c08bc711e25e7fac977d63edcc5a52b025cad9f87ba5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd214c22830205002b4c08bc711e25e7fac977d63edcc5a52b025cad9f87ba5b->enter($__internal_dd214c22830205002b4c08bc711e25e7fac977d63edcc5a52b025cad9f87ba5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Utilisateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Mdp</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "login", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "mdp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_edit", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_new");
        echo "\">Create a new utilisateur</a>
        </li>
    </ul>
";
        
        $__internal_dd214c22830205002b4c08bc711e25e7fac977d63edcc5a52b025cad9f87ba5b->leave($__internal_dd214c22830205002b4c08bc711e25e7fac977d63edcc5a52b025cad9f87ba5b_prof);

        
        $__internal_b016f499096886e7a66021aecbb5f16fd120113bda6daec792ea3420b7c691d5->leave($__internal_b016f499096886e7a66021aecbb5f16fd120113bda6daec792ea3420b7c691d5_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Utilisateurs list</h1>

    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Mdp</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for utilisateur in utilisateurs %}
            <tr>
                <td><a href=\"{{ path('utilisateur_show', { 'id': utilisateur.id }) }}\">{{ utilisateur.login }}</a></td>
                <td>{{ utilisateur.mdp }}</td>
                <td>{{ utilisateur.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('utilisateur_show', { 'id': utilisateur.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('utilisateur_edit', { 'id': utilisateur.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('utilisateur_new') }}\">Create a new utilisateur</a>
        </li>
    </ul>
{% endblock %}
", "utilisateur/index.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\utilisateur\\index.html.twig");
    }
}
