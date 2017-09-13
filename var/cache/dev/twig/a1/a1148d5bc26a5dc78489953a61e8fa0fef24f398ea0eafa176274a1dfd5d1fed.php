<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_faa6d30c20dddaa47a4e06f44d9560640c3dd6f3d072f1104e152cb02c176fc6 extends Twig_Template
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
        $__internal_6b389aa7292b984b6054474b6bdc037be16c20f4426f8a35d1aa23bae67e2029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b389aa7292b984b6054474b6bdc037be16c20f4426f8a35d1aa23bae67e2029->enter($__internal_6b389aa7292b984b6054474b6bdc037be16c20f4426f8a35d1aa23bae67e2029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b08a8b0706f0f776354a7a255ffcce99f7eb1a3a890bd011fb963411e31878db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08a8b0706f0f776354a7a255ffcce99f7eb1a3a890bd011fb963411e31878db->enter($__internal_b08a8b0706f0f776354a7a255ffcce99f7eb1a3a890bd011fb963411e31878db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6b389aa7292b984b6054474b6bdc037be16c20f4426f8a35d1aa23bae67e2029->leave($__internal_6b389aa7292b984b6054474b6bdc037be16c20f4426f8a35d1aa23bae67e2029_prof);

        
        $__internal_b08a8b0706f0f776354a7a255ffcce99f7eb1a3a890bd011fb963411e31878db->leave($__internal_b08a8b0706f0f776354a7a255ffcce99f7eb1a3a890bd011fb963411e31878db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
