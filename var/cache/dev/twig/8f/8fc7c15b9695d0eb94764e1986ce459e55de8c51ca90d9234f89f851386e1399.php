<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b8df868b2cf887a5083fc180bab83a28f9ac779296e8da1082b10c1aa957be13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3c621e4b04b2135f8276ef90fb8ec0f20f74fdb7683c3215d5edaeb64acda27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c621e4b04b2135f8276ef90fb8ec0f20f74fdb7683c3215d5edaeb64acda27->enter($__internal_b3c621e4b04b2135f8276ef90fb8ec0f20f74fdb7683c3215d5edaeb64acda27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d366f6c7761ffeb22774a26ff50320521e9d9e548ca18a4648ebbac42089cdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d366f6c7761ffeb22774a26ff50320521e9d9e548ca18a4648ebbac42089cdc0->enter($__internal_d366f6c7761ffeb22774a26ff50320521e9d9e548ca18a4648ebbac42089cdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b3c621e4b04b2135f8276ef90fb8ec0f20f74fdb7683c3215d5edaeb64acda27->leave($__internal_b3c621e4b04b2135f8276ef90fb8ec0f20f74fdb7683c3215d5edaeb64acda27_prof);

        
        $__internal_d366f6c7761ffeb22774a26ff50320521e9d9e548ca18a4648ebbac42089cdc0->leave($__internal_d366f6c7761ffeb22774a26ff50320521e9d9e548ca18a4648ebbac42089cdc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
